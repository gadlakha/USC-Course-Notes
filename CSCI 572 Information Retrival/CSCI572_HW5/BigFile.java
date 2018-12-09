import java.util.*;
import java.io.File;
import java.io.FileInputStream;
import java.io.PrintWriter;
import org.apache.tika.metadata.Metadata;
import org.apache.tika.parser.ParseContext;
import org.apache.tika.parser.html.HtmlParser;
import org.apache.tika.sax.BodyContentHandler;


public class BigFile {

    public static void main(String args[]) throws Exception {


        PrintWriter wr = new PrintWriter("/Users/lingquan/Downloads/Assignment5/big.txt");
        String myPath = "/Users/lingquan/Downloads/latimes/latimesData";
        File files = new File(myPath);


        try {

            for (File cur_file : files.listFiles()) {

                System.out.println("current file:" + cur_file);

                FileInputStream input_stream = new FileInputStream(cur_file);
                BodyContentHandler handler = new BodyContentHandler(-1);
                Metadata meta = new Metadata();
                ParseContext parsed_context = new ParseContext();
                HtmlParser htmlparser = new HtmlParser();

                htmlparser.parse(input_stream, handler, meta, parsed_context);
                String content = handler.toString();
                String arr_word[] = content.split(" ");



                for (int i = 0; i < arr_word.length; i++) {
                    String cur = arr_word[i];

                    System.out.println("current word" + cur);
                    if (cur.matches("[a-zA-Z]+\\.?")) {
                        wr.print(cur + " ");
                    }
                }
            }

        } catch (Exception err) {

            System.err.print("There is a error: " + err.getMessage() + ". Please check it!");
            err.printStackTrace();
        }

        wr.close();

    }
}