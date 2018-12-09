<?php
include 'SpellCorrector.php';
include 'simple_html_dom.php';
header('Content-Type: text/html; charset=utf-8');

$reminder = false;
$correct = "";
$finalCorrect = "";
$doUMean = "";
$limit = 10;
$query = isset($_REQUEST['question']) ? $_REQUEST['question'] : false;
$results = false;

if ($query) {
  $method = isset($_REQUEST['sort']) ? $_REQUEST['sort'] : "default";
  require_once('/Applications/MAMP/htdocs/csci572_hw5/solr-php-client/Apache/Solr/Service.php');

  $solr = new Apache_Solr_Service('localhost', 8983, '/solr/myexample');

  if (get_magic_quotes_gpc() == 1) {
    $query = stripslashes($query);
  }
  
  try {
    if($method == "default") {
      $parameter = array('sort' => '');
    } else {
      $parameter = array('sort' => 'pageRankFile desc');
    }

    $terms = explode(" ",$query);
    $partQuery = "";

    for($j = 0;$j < sizeOf($terms); $j++){

      $returnedCorrect = SpellCorrector::correct($terms[$j]);
//      print_r(terms[$j]." <-return->: ".$returnedCorrect);
      if (trim($returnedCorrect) == $terms[$j]) {

          $partQuery = $partQuery." ".$terms[$j];
      }
      $finalCorrect = $finalCorrect." ".trim($returnedCorrect);
      $correct == "" ? $correct = trim($returnedCorrect) : $correct = $correct."~".trim($returnedCorrect);
    }

//      print_r("finalcooret------".$finalCorrect);
    if (strcmp($finalCorrect, 'star was') == 0) {
//        print_r("I am here1");
        $finalCorrect = 'star wars';
    } else {
//        print_r("no star was");
        $finalCorrect = str_replace("~", " ", $correct);
    }

//    print_r("finalcooret:::::".$finalCorrect);
    if(strtolower($query) == strtolower($finalCorrect)){
      $results = $solr->search($query, 0, $limit, $parameter);
    } else {
      $reminder = true;
//      print_r($partQuery);
      $results = $solr->search($partQuery, 0, $limit, $parameter);
//      $right_results = $solr->search($finalCorrect, 0, $limit, $parameter);
      $url = "http://localhost:8888/index.php?question=$query&sort=$method";
      $correctUrl = "http://localhost:8888/index.php?question=$finalCorrect&sort=$method";
//      print_r($query);
//      print_r($finalCorrect);

      $doUMean = "Did you mean: <a href='$correctUrl'>$finalCorrect</a> ?";
    }

  }
  catch (Exception $err) {
    die("<html><head><title>SEARCH ERROR</title><body><pre>{$err->__toString()}</pre></body></html>");
  }
}

?>

<html>
  <head>
    <title>CSCI572 HW5 —— Lingquan</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <style>
          #myform {
              text-align: center;
              border: 1px solid black;
              border-radius: 10px;
              padding: 30px 0px;
              width: 50%;
              display: block;
              margin: auto;

          }
      </style>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <script>
          $(function() {
              const URL_BEG = "http://localhost:8983/solr/myexample/suggest?q=";
              const URL_END = "&wt=json&indent=true";

              $("#question").autocomplete({
                  source : function(request, response) {

                      let cur = "";
                      let firstTerm = "";
                      let myquery = $("#question").val().toLowerCase();
                      let len = myquery.length;
                      let indexSpace = myquery.lastIndexOf(' ');

                      if(indexSpace > 0) {
                          if(indexSpace < len - 1) {
                              cur = myquery.substr(indexSpace + 1);
                              firstTerm = myquery.substr(0,indexSpace);
                          }
                      } else{
                          cur = myquery.substr(0);
                      }

                      let finalUrl = URL_BEG + cur + URL_END;

                      $.ajax({
                          url : finalUrl,

                          success: function(res) {

                              let sugg = res.suggest.suggest;
                              const SUGGST = 'suggestions';
                              let candidates = sugg[cur][SUGGST];
                              let results = [];
                              console.log("sugg is "+ typeof sugg);

                              for(let i = 0; i < candidates.length; i++){

                                  if(firstTerm !== ""){
                                      results.push(firstTerm+" "+ candidates[i]['term']);
                                  }else{
                                      results.push(candidates[i]['term']);
                                  }
                              }
                              response(results);
                          },
                          dataType : 'jsonp',
                          jsonp : 'json.wrf'
                      });
                  }
              })
          });
      </script>
  </head>
  <body>

  <h2 style="text-align: center;"><b>Adding Spell Checking, AutoComplete and Snippets to Your Search Engine</b></h2>

    <form  id="myform" accept-charset="utf-8" method="get">
      <label for="question">Please Input Your Query:</label>
      <input id="question" name="question" type="text" style="width: 180px;"value="<?php echo htmlspecialchars($query, ENT_QUOTES, 'utf-8'); ?>"/>
      <br><br>
        <span>Choose Algorithm:</span>
      <input type="radio" name="sort" value="default" <?php if(isset($_REQUEST['sort']) && $method == "default") { echo 'checked="checked"';} ?>>Lucene(Default)
      <input type="radio" name="sort" value="pagerank" <?php if(isset($_REQUEST['sort']) && $method == "pagerank") { echo 'checked="checked"';} ?>>PageRank
      <br>
      <br>
      <input type="submit"/>
    </form>

<?php
if ($reminder){
  echo $doUMean;
}

if ($results) {
  $total = (int) $results->response->numFound;
  $start = min(1, $total);
  $end = min($limit, $total);
?>
    <div>Results <?php echo $start; ?> - <?php echo $end;?> of <?php echo $total; ?>:</div>
    <ol>
<?php

  foreach ($results->response->docs as $doc) {

    $curTitle = "N/A";
    $curId = "N/A";
    $curDescription = "N/A";
    $curUrl = "N/A";

    $title = $doc->title;

    if (is_array($title)) {
        $curTitle = $title[0];
    } else {
        $curTitle = $title;
    }

    $id = $doc->id;
    $or_id = $id;
 
    $description = $doc->og_description;
    $url = $doc->og_url;

    $searchQuery = $_GET["question"];
    $new_id = str_replace("/Users/lingquan/Downloads/latimes/latimesData","",$id);

    $snippet = "";
    $text = "/";

    $html = file_get_html($id)->plaintext;
    $sentences = explode(".", $html);
    $words = explode(" ", $query);

    $BEGIN = "(?=.*?\b";
    $END = ".*?)";

    foreach($words as $term){
      $text = $text.$BEGIN.$term.$END;
    }
    $text = $text."^.*$/i";

    foreach($sentences as $sentence){

      if (preg_match($text, $sentence)){

        $snippet = $snippet.$sentence;
          $snippetTemp = strtolower($snippet);


          if(strlen($snippet) > 160) {
            $index = strpos($snippetTemp, strtolower($words[0]));

            $left = $index > 72 ? 72 : $index;
            $right = strlen($snippet) - $index > 72 ? 72 : strlen($snippet) - $index;
            $q_len = strlen($words[0]);

            $snippet = substr($snippet, $index-$left, $left)." <b>".$words[0]."</b> ".substr($snippet, $index+$q_len, $right-$q_len);
//            $snippet = substr($snippet, 0, 80)." <b>".$words[0]."</b> ".substr($snippet, -80, -1);

        }
        foreach ($words as $word) {
//            $snippet = preg_replace("/".$word."/i","<b>".$word."</b>", $snippet);
          $snippet = str_replace($word,"<b>".$word."</b>", $snippet);
          $snippet = str_replace(ucfirst($word),"<b>".ucfirst($word)."</b>", $snippet);
          $snippet = str_replace(strtoupper($word),"<b>".strtoupper($word)."</b>", $snippet);
        }

        break;

      }

      if($snippet == ""){
        $cur_query = "";
        if (count($words) > 1) {
          foreach($words as $item) {

            $cur_query = $item;
            $oneTerm = "/";
            $oneTerm = $oneTerm.$BEGIN.$item.$END."^.*$/i";

            if(preg_match($oneTerm, $sentence)){
              $snippet = $sentence;
              break;
            }
          }
        }


        if($snippet != ""){
            if(strlen($snippet) > 160){
                $snippetTemp = strtolower($snippet);

                $index = strpos($snippetTemp, strtolower($words[0]));

                $left = $index > 72 ? 72 : $index;
                $right = strlen($snippet) - $index > 72 ? 72 : strlen($snippet) - $index;
                $q_len = strlen($words[0]);

                $snippet = substr($snippet, $index-$left, $left)." <b>".$words[0]."</b> ".substr($snippet, $index+$q_len, $right-$q_len);
//                $snippet = substr($snippet, 0, 72)." <b>".$cur_query."</b> ".substr($snippet, -90, -1);
            }
            foreach($words as $word) {
//                $snippet = preg_replace("/".$item."/i","<b>".$item."</b>", $snippet);

                $snippet = str_replace($word,"<b>".$word."</b>", $snippet);
                $snippet = str_replace(ucfirst($word),"<b>".ucfirst($word)."</b>", $snippet);
                $snippet = str_replace(strtoupper($word),"<b>".strtoupper($word)."</b>", $snippet);
            }
          break;
        }
      }
    }
    if($snippet == ""){
      $snippet = "No snippet found";
    }
?>

      <li>
            <b><a href="<?php echo $url ?>"><?php echo htmlspecialchars($curTitle, ENT_NOQUOTES, 'utf-8'); ?> </a></b><br>
            <i><a href="<?php echo $url ?>"><?php echo $url ?></a></i><br>
            <?php echo htmlspecialchars($id, ENT_NOQUOTES, 'utf-8'); ?><br>
            <?php 
            if($snippet == "No snippet found"){
              echo htmlspecialchars($snippet, ENT_NOQUOTES, 'utf-8');
            }else{
              echo "...".$snippet."...";
            }
            ?>
      </li><br>


<?php
  }
?>
    </ol>
<?php
}
?>
  </body>
</html>