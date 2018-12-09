<?php
// make sure browsers see this page as utf-8 encoded HTML
header('Content-Type: text/html; charset=utf-8');

$limit = 10;
$query = isset($_REQUEST['q']) ? $_REQUEST['q'] : false;
$results = false;
$rankAlgorithm = isset($_GET['rankAlgorithm']) ? $_GET['rankAlgorithm'] : false;

$defaultParameters = array(
  'fl' => 'title,og_url,og_description,id'
);
$pagerankParameters = array(
  'fl' => 'title,og_url,og_description,id',
  'sort' => 'pageRankFile desc'
);

$mapping = array_map('str_getcsv', file('/home/lingquan/Downloads/latimes/URLtoHTML_latimes.csv'));

if ($query){
  // The Apache Solr Client library should be on the include path
  // which is usually most easily accomplished by placing in the
  // same directory as this script ( . or current directory is a default
  // php include path entry in the php.ini)
  require_once('/opt/lampp/htdocs/572HW4/solr-php-client/Apache/Solr/Service.php');
  // create a new solr service instance - host, port, and webapp
  // path (all defaults in this example)
  $solr = new Apache_Solr_Service('localhost', 8983, '/solr/myexample/');
  // if magic quotes is enabled then stripslashes will be needed
  if (get_magic_quotes_gpc() == 1)
  {
    $query = stripslashes($query);
  }
  // in production code you'll always want to use a try /catch for any
  // possible exceptions emitted  by searching (i.e. connection
  // problems or a query parsing error)
  try
  {
    if ($rankAlgorithm != "solr") {
      $results = $solr->search($query, 0, $limit, $pagerankParameters);
    } else {
      $results = $solr->search($query, 0, $limit, $defaultParameters);
    }
  }
  catch (Exception $e)
  {

    die("<html><head><title>SEARCH EXCEPTION</title><body><pre>{$e->__toString()}</pre></body></html>");
  }
}
?>
<html>
  <head>
    <title>PHP Solr Client</title>
  </head>
  <body>
    <h1 style="text-align:center;">Comparing Ranking Algorithms with Solr</h1>
    <form  accept-charset="utf-8" method="get" style="text-align:center;">
      <label for="q">Search:</label>
      <input id="q" name="q" type="text" value="<?php echo htmlspecialchars($query, ENT_QUOTES, 'utf-8'); ?>">
      <br>
      <br>
      <label for="rankAlgorithm">Choose Ranking Algorithm:</label><br>
      <input type="radio" name="rankAlgorithm"  value="solr" <?php if($rankAlgorithm != "pagerank") { echo "checked='checked'"; } ?>> Lucene(Solr Default)
      <input type="radio" name="rankAlgorithm"  value="pagerank" <?php if($rankAlgorithm == "pagerank") { echo "checked='checked'"; } ?>> PageRank
      <br>
      <br>
      <input type="submit">
    </form>
<?php
// display results
if ($results)
{
  $total = (int) $results->response->numFound;
  $start = min(1, $total);
  $end = min($limit, $total);
?>
    <div>Results: <?php echo $start; ?> - <?php echo $end;?> of <?php echo $total; ?>:</div>
    <ol>
<?php

  // iterate result documents
  foreach ($results->response->docs as $doc)
  {

    $curTitle = "N/A";
    $curId = "N/A";
    $curDescription = "N/A";
    $curUrl = "N/A";
    $finalId = str_replace("/home/lingquan/Downloads/latimes/latimes/latimes","",$curId);

    if (!isset($doc->og_url)) {
       print_r("here:!");
        foreach($mapping as $row){
            if($row[0] == $finalId){
                $curUrl = $row[1];
                unset($row);
                break;
            }
          }
   }

   foreach($doc as $field => $value) {
      if ($field == "id") {
        $curId = $value;
      }
      if ($field == "title") {
        if (is_array($value)) {
          $curTitle = $value[0];
        } else {
          $curTitle = $value;
        }
      }
      if ($field == "og_description") {

        if (is_array($value)) {
          $curDescription = $value[0];
        } else {
          $curDescription = $value;
        }
      }

      if ($field == "og_url") {

        if (is_array($value)) {
          $curUrl = $value[0];
        } else {
          $curUrl = $value;
        }
      }

      }
  ?>

    <li>
      <span>Title:<span>
        <a href="<?php echo $curUrl ?>">
          <?php
          echo $curTitle
       ?>
        </a>

      <br>
       <span>URL:</span> <a href="<?php echo $curUrl ?>" target="_blank" style="font-weight: bold;"><?php echo $curUrl ?></a><br>
       <span>ID:</span>  <span><?php echo $curId ?></span> <br>

      Description:
      <?php
      echo $curDescription


      ?>
    </li>
<?php
  }
?>
    </ol>
<?php
}
?>
  </body>
</html>
