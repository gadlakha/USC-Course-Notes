import java.io.IOException;
import java.util.HashMap;
import java.util.StringTokenizer;
import java.util.StringTokenizer;
import org.apache.hadoop.fs.Path;
import org.apache.hadoop.io.Text;
import org.apache.hadoop.mapreduce.Job;
import org.apache.hadoop.mapreduce.Mapper;
import org.apache.hadoop.mapreduce.Reducer;
import org.apache.hadoop.mapreduce.lib.input.FileInputFormat;
import org.apache.hadoop.mapreduce.lib.output.FileOutputFormat;

public class InvertedIndexJob {
  public static void main(String[] args) throws IOException, ClassNotFoundException, InterruptedException {

    Job job = new Job();
    job.setJarByClass(InvertedIndexJob.class);
    job.setJobName("Inverted Index");

    FileInputFormat.addInputPath(job, new Path(args[0]));
    FileOutputFormat.setOutputPath(job, new Path(args[1]));

    job.setMapperClass(InvertedIndexMapper.class);
    job.setReducerClass(InvertedIndexReducer.class);

    job.setOutputKeyClass(Text.class);
    job.setOutputValueClass(Text.class);


    System.exit(job.waitForCompletion(true) ? 0 : 1);
  }

  static class InvertedIndexMapper extends Mapper<Object, Text, Text, Text>{
    private Text word = new Text();

    public void map(Object key, Text value, Context context) throws IOException, InterruptedException {
      Text documentId = new Text();
      String[] arr = value.toString().toLowerCase().split("\t");

      documentId.set(arr[0]);
      StringTokenizer tokenizer = new StringTokenizer(value.toString());

      while (tokenizer.hasMoreTokens()) {
        String[] terms = tokenizer.nextToken().replaceAll("[^a-zA-Z]", " ").toLowerCase().trim().split("\\s+");
        for (String term: terms) {
          word.set(term);
          context.write(word, documentId);
        }
      }
    }
  }

  static class InvertedIndexReducer extends Reducer<Text, Text, Text, Text> {
    public void reduce(Text term, Iterable<Text> documentIds, Context context) throws IOException, InterruptedException {

      HashMap<String, Integer> counts = new HashMap<>();

      for (Text documentId: documentIds) {
        counts.put(documentId.toString(), counts.getOrDefault(documentId.toString(),0) + 1);
      }

      StringBuilder sb = new StringBuilder();
      Text posting = new Text();

      for(String documentId: counts.keySet()){
        sb.append(documentId);
        sb.append(":");
        sb.append(counts.get(documentId));
        sb.append("\t");
      }
        posting.set(sb.toString());
        context.write(term, posting);
    }
  }
}
