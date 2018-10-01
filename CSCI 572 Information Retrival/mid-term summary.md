## Search Engine Basic
## What is Web search?
* Providing access to heterogeneous, distributed information that is publicly available on the World Wide Web
* Multi-billion dollar business
* Source of new opportunities in marketing
* Strains the boundaries of trademark and intellectual property laws
* A source of unending technical challenges

## What is web search engine?
A search engine is a program designed to help find information stored on a computer system such as the World Wide Web, inside a corporate or proprietary network or a personal computer”  

## Basic Web Search Internals
* The User
  1. Diverse in background/training
  2. Diverse in access methodology
  3. Diverse in search methodology
  4. Poor comprehension of syntax

* The Web：
  1. No design/co-ordination
  2. Distributed content creation, linking
  3. Content includes truth, lies, obsolete information, contradictions …
  4. Data is stored in structured (databases), semi-structured (tables)…
  5. Scale larger than previous text corpora
  6. Growth – still expanding
  7. Content can be dynamically generated

* The Crawler/spider: builds corpus
* The Indexer: creates inverted indexes
* The Ads
* The Query Processor： serves query results

## Most Dynamic content are missed
* Typically dynamic content is not indexed
* A page without a static html version,
* Dynamic content is usually assembled at the time of a request from a browser
  - To spot dynamic content typically a URL has a ‘?’ character in it
  - Some dynamic content includes malicious spider traps (infinite loops)
* The term deep web refers to content missed by search engine crawlers

## User’s Information NeedsAre Diverse
* Informational – want to learn about something (~40%)
* Navigational – want to go to that page (~25%)
* Transactional – want to do something (web-mediated) (~35%)
* Gray areas

## Users’ Evaluation of Engines
* Relevance and validity of results
* User Interface – Simple, no clutter, error tolerant
* Trust – Results are objective, the engine wants to help me
* Post-process tools provided
  - Explicit options such as: “search within results”, “give me more like this”, “refine the query” ...
  - Anticipative: related searches
* Deal with idiosyncrasies(癖好)

## Query processing involves much more than just matching query terms with document terms  
   Semantic analysis of the query includes:
* Determining the language of the query
* Filtering of unnecessary words from the query (stop words)
* Looking for specific types of queries, e.g.
  - Personalities (triggered on names)
  - Cities (travel info, maps)
  - Medical info (triggered on names and/or results)
  - Stock quotes, news  (triggered on stock symbol)
   - Company info …  
* Determining the user’s location or the target location of the query
* Remembering previous queries
* Maintaining a user profile

# Web Trend
## Recent Trends in Web Internet Development
* Growth in number of users connected
* Growth in Smartphone use, particularly iOS and Android
* Growth in digital data, especially photos and video
* Growth in Social Media
* Growth in Internet use from Mobile over desktop/laptop
* Growth in tablet usage over desktops/laptops
* Decreased dominance of Microsoft Windows

## Measuring the Web by number of web sites
* Measuring the Web by the Languages of Web Pages
* Measuring the Web by Rate of Change of Pages
* Measuring the Web by Document Content Type
* Measuring the Web by linkage
* Measuring the Web as a Graph
* Measuring the Web by Content

## What to do with Content type?
* Parse them
* Index their metadata
* Identify what language they belong to

## Web Characteristics When Viewed as a Graph

* Significant duplication
* High linkage
* Complex graph topology
* Spam

## Manual Hierarchical Web Taxonomies
Yahoo originally used human editors to assemble a large hierarchically structured directory of web pages.

## Open Directory Project
* known as DMoZ, is an effort to organize the web according to an ontology;
* An approach similar to Yahoo’s;
* Based on the distributed labor of volunteer editors (“net-citizens provide the collective brain”).
* Used by most other search engines.
* Started by Netscape.
* Distributes its data using RDF format
* DMOZ shut down in 2016

# Search engine Evaluation

## Precision and Recall

                        | Relevance      | Not relevance
           ----         |------          |----     
           retrieved    |  true positive |  fals positive
          not retrieved| false negative |  true negative  

*  Precision = tp/(tp + fp)
* Recall = tp/(tp + fn) 在所有有关的比列
* The accuracy of an engine is defined as:
   - the fraction of these classiﬁcations that are correct
          (tp + tn) / ( tp + fp + fn + tn)


* For web applications, Precision is more important than Recall
* In a good system, precision decreases as the number of docs retrieved (or recall) increases

## Three Means
for the numbers 3, 6, 9, and 12
* The arithmetic mean is: (3+6+9+12)/4 = 7.5
* The geometric mean is: nth-root(3*6*9*12) = 4th-root(1944) = 6.64
* The harmonic mean is:  (1/3+1/6+1/9+1/12)=(.33+.16+.11+.08)/4=0.17 and 1/0.17 = 5.88
* harmonic mean emphasizes the importance of small values, whereas the arithmetic mean is affected more by outliers（极端值） that are unusually large
## F-score
* harmonic mean of the precision and the recall is often used as an aggregated performance score for the evaluation of algorithms and systems: called the F-score (or F-measure)

## Mean average precision (MAP)
* for a set of queries is the mean of the average precision scores for each query.
* This is the most commonly used measure in research papers
- Mean Average Precision (MAP) Some negative aspects
 1. If a relevant document never gets retrieved, we assume the precision corresponding to that relevant doc to be zero (this is actually reasonable)
 2. Each query counts equally
 3. MAP assumes user is interested in finding many relevant documents for each query
 4. MAP requires many relevance judgments in the document collection


# Difficulties in UsingPrecision/Recall
* Should average over large document collection and query ensembles
* Need human relevance assessments
* Assessments have to be binary
* Heavily skewed by collection/authorship

## Google's Search Quality Rating Guidelines Document
* Google relies on raters, working in many countries and languages around the world
* The data they generate is rolled up statistically to give

## Google's 4-Step Process for Changing Their Search Algorithm
1. Precision Evaluations
  People use the Guidelines to rate
  search results
2. Side-by-Side Experiments
  people are shown two different sets of search results and asked
  which they prefer
3. Live Traffic Experiments
  the search algorithm is altered for a small number of actual users
4. Full Launch
  A final analysis by Google engineers and the improvement is released

## A/B testing
   is comparing two versions of a web page to see which one performs better. You compare two web pages by showing the two variants (let's call them A and B) to similar visitors at the same time. The one that gives a better conversion rate, wins!


# Lexicon & Text Normalization
## An equation of the form y = kx^c is called a power law
* k and c are constants
* Zipf’s law is a power law with c = –1
* On a log-log plot, power laws give a straight line with slope c.
* logy = logk + c logx
## power laws
* Population of U.S. states
* Book sales at Amazon.com
* Node degrees in the web graph
* Frequency of accesses to web pages
  example1: the access counts on Wikipedia pages, with s approximately equal to 0.3
 * Words in the English language
 for instance, in Shakespeare’s play Hamlet with s approximately 0.5
 * Sizes of settlements
 * Income distributions among individuals
 * Size of earthquakes
 * Notes in musical performances

## distribution of frequency of different words and the growth of vocabulary size
 factors affect the performance of information retrieval and can be used to select appropriate term weights and other aspects of an IR system.

## Heavy tailed distribution
 * A few words are very common.
* Most words are very rare.
The above phenomenon is called a “heavy tailed” distribution, since most of the probability mass is in the “tail”

## Zipf’s Law Impact on IR
* Good News: Stopwords will account for a large fraction of text so eliminating them greatly reduces inverted-index storage costs.
* Bad News: For most words, gathering sufficient data for meaningful statistical analysis is difficult since they are extremely rare.

##
vocabulary growth determines how the size of the inverted index will scale with the size of the corpus.
In practice a vocabulary is not really upper-bounded due to proper names, typos, etc.

## Zip f law
* y is the frequency of the word, and x is its ranking in the frequency table. C=-1.
## heap law
* If V is the size of the vocabulary and n is the number of words:
* V = Kn^C
* Typical constants: K = 10 ~ 100  C = 0.4 ~ 0.6  
* documents in the collection decides the dictionary size

##  What is a Lexicon?
* A database of the vocabulary of a particular domain (or a language)
* It is more than a list of words/phrases
* Usually it includes some linguistic information
* Often some semantic information is included:

## challenges for Lexicon
* Determining the Characters
* Documents being indexed can include items from many different languages
 A single index may contain terms from many languages.
* Sometimes a single document or its components can contain multiple language formats, e.g.

## Tokenization:
* The task of chopping a document into pieces called tokens, and possibly throw away possible characters.

## A token
* is an instance of a sequence of characters in some particular document that are grouped together as a useful semantic unit
* A term is a (possibly normalized) type that is included in the lexicon
## Token normalization
* is the process of canonicalizing tokens so that matches occur despite superficial differences in the character sequences of the tokens.
* The standard way to normalize is to implicitly create equivalence classes , which are normally named after one member of the set; this is often called stemming;
* stemming is the process for reducing inflected (or sometimes derived) words to their stem, base or root form – generally a written word form;
or to reduce multiple forms of a word to a common base form,
## Case-folding
case-folding is reducing all letters to lower case.
## Lemmatization 
usually refers to doing things properly with the use of a vocabulary and morphological analysis of words, normally aiming to remove inflectional endings only and to return the base or dictionary form of a word, which is known as the lemma
## stemmer
* A stemmer written by Martin Porter has  become the de-facto standard algorithm  used for English stemming
* The Porter Stemming Algorithm(细节还没看)

## Two error mesasurements
* Over-stemming: two separate inflected words are stemmed to the same root, but should not have been, a false positive
* Under-stemming: where two separate inflected words should be stemmed to the same root, but are not, a false negative

## Soundex Algorithm

* Soundex is a phonetic algorithm for indexing names by their sound when pronounced in English.
* The basic aim is for names with the same pronunciation to be encoded to the same string so that matching can occur despite minor differences in spelling
* Every Soundex code consists of a letter and three numbers
* 具体没看

## Main Lucene Modules
Lucene is the underlying software that imports documents and creates an inverted index

* Document Parsing and Analysis
* Document Identification
* Indexing
## two methods for ranking result in Lucene/Solr
* TokenFilters
* Tokenizers

# Inverted Indexing
## An inverted index
 is typically composed of a vector containing all distinct words of the text collection in lexicographical order (which is called the vocabulary) and for each word in the vocabulary, a list of all documents (and text positions) in which that word occurs

## Term-Document Incidence Matrix
* it is a sparse matrix where rows represent terms and columns represent documents
* are Naturally Sparse
## Terms in the inverted file index may be refined:
Case folding: converting all uppercase letters to lower case
Stemming: reducing words to their morphological roots
Stop words: removing words that are so common they provide no information

## Skip pointers
* To speed up the merging of postings we use the technique of Skip Pointers
* Skip pointers are added at indexing time; they are shortcuts, and they only help for AND queries and they are useful when the corpus is relatively static
* A simple heuristic for placing skips, is that for a postings list of length P, use sqrt{P} evenly-spaced skip pointers.
## Inverted index systems
* dictionary: index term + #docs
* posting list: j-th document, frequencey of term

## Phrase Query
* Bi-word indexes (also called 2-grams or 2 shingles):
  1. define: A bi-word (or a 2-gram) is a consecutive pair of terms in some text
  2. 优化：
     - 太多的话转化为 AND
      - To salvage the bi-word indexing method on these examples one can use part-of-speech tagging： Part-of-speech taggers classify words as nouns, verbs, etc
* Positional indexes

#

##  How Google Treats Queries with Boolean Operators
* All query terms are implicitly ANDed
* OR has higher precedence than AND
* Google/Bing queries are not case sensitive.
* Google doesn’t support stemming.
* Rather, Google offers full-word wildcards.eg.  it’s +a * world

## Google Advanced Operators
#### Query modifiers
* daterange:
* filetype: restricts your results to files ending in ".doc" (or .xls, .ppt. etc.), and shows you only files created with the corresponding program
* inanchor: will restrict the results to pages containing the query terms you specify in the anchor text or links to the page.
allinachor： restricts results to pages containing all query terms you specify in the anchor text on links to the page.
* intext: ignores link text, URLs, and titles, and only searches body text.

* intitle: restricts the results to documents containing a particular word in its title.
* inurl: restricts the results to documents containing a particular word in its URL.

* site:: restricts the results to those websites in a domain
* cache：url shows the version of a web page that Google has in its cache
* link: restricts the results to those web pages that have links to the specified URL
* related: lists web pages that are "similar" to a specified web page.
* info: presents some information that Google has about a particular web page.

## Auto-Completion
* Auto-completion is the process of predicting a word or phrase that the user wants to type in without the user actually typing it in completely

* Auto-completion is a form of relevance feedback

### MMR
The mean reciprocal rank is a statistical measure for evaluating any process that produces a list of possible responses to a sample of queries, ordered by probability of correctness. The reciprocal rank of a query response is the multiplicative inverse of the rank of the first correct answer

# Youtube
## YouTube Ranking Factors
* Meta Data
* Video Quality
* Number of views, likes, shares and links
* Subtitles and Closed Captions
## recommondation system
* user’s personal activity
* co-visitation (count how many times two video are co-watched)
* Association Rule Mining(公式)
## ContentID
* a fingerprint database of copyrighted content, called Content ID

#
##  bibliographic Coupling
The bibliographic coupling of two documents A and B is the number of documents cited by both A and B.
## Journal Impact Factor
The impact factor of a journal J in year Y is the average number of citations (from indexed documents published in year Y) to a paper published in J in year Y1 or Y2.
## PageRank
* is a web link analysis algorithm used by Google
* A link to a page counts as a vote of support.
* PR(A) = (1-d) + d (PR(T1)/C(T1) + ... + PR(Tn)/C(Tn))
* That the PageRanks form a probability distribution over web pages, so the sum of all web pages' PageRanks will be one.

## Use Site Maps to improve

## Rank Sinks: Occur when pages get in infinite link cycles.

## Problem of Pagerank-- sovled by damper factor
* Spider Traps: A group of pages is a spider trap if there are no links from within the group to outside the group.
* Dangling Links: A page contains a dangling link if the hypertext points to a page with no outgoing links.
* Dead Ends: are simply pages with no outgoing links.

## HITS--bipartite graph
## Authorities
* are pages that are recognized as providing significant, trustworthy, and useful information on a topic.
## Hubs
* are index pages that provide lots of useful links to relevant content pages (topic authorities).

authority value is computed as the sum of the scaled hub values that point to that page; and a hub value is the sum of the scaled authority values of the pages it points to

# Informationn retrieval
## IR vs data mangament
* Focused on structured data stored in relational tables rather than free-form text
* Focused on efficient processing of well-defined queries in a formal language (SQL)
* Clearer semantics for both data and queries
* Web pages are mostly unstructured, though the Document Object Model (DOM) can provide some clues
## Three major Information Retrieval Models
* Boolean models (set theoretic) (Chapter 1 in Manning et al)
* Vector space models (statistical/algebraic)
* Probabilistic models

## Term Weights:Inverse Document Frequency
idfi = inverse document frequency of term i,  
           = log2 (N/ df i)  
             (N: total number of documents)
An indication of a term’s discrimination power
* A typical combined term importance indicator is tf-idf weighting
* Collection frequency of term is the number of times term t appears in the collection of documents, counting multiple appearances.  
* No. idf can be used to set different weights for some terms that have different document frequency.
But if there is only one term, then the term frequency can determine its ranking, no matter what the term's document frequency is.  
* td-idf: The weight of a term for a document can be determined by its term frequency in this document combined with the term's inverse document frequency.
* Wij =  tfij .idfi  =  (1 + log tfij )* log2 (N/ dfi)

## A similarity measure
* is a function that computes the degree of similarity between two vectors
## Cosine SimilarityMeasure Normalized
* 公式：

##  P(LCS(C1,C2))
* THE probablity of the lowest common  subsumer(ancseter) of word c1 and c2

# Duplication
## De-Duplication
* – the process of identifying and avoiding essentially identical web pages
* With respect to web crawling, de-duplication essentially refers to the identification of identical and nearly identical web pages and indexing only a single version to return as a search result
## How can two URLs differ yet still point to the same page?
* the URL’s host name can be distinct (virtual hosts) sharing the same document folder,
* the URL’s protocol can be distinct (http, https), but still deliver the same document
* the URL’s path and/or page name can be distinct
* Mirroring is the single largest cause of duplication on the web
## Why Detect Near Duplicates
* Clustering
* Data extraction
* Plagiarism
* Spam detection
* Duplicates within a domain
## Duplicate: Exact match;
* Compare character by character
* Use a hash function that examines the entire document
* pick some fixed random positions for all documents and make the hash function depend only on these;
* cryptographic hash function  is a hash function which takes an input (or 'message') and returns a fixed-size alphanumeric string, which is called the hash value (sometimes called a message digest, digital fingerprint, digest or a checksum).
## Produce fingerprints and test for similarity -
* Produce fingerprints and test for similarity
* Instead of documents defined by n-vector of features, instead compute subsets of words (called shingles) and test for similarity of the sets
##
* Jaccard distance – D(x,y) = 1 – SIM(x,y) or 1 minus the ratio of the sizes of the intersection and union of sets x and y
* d(A, B) = 1 – s(A, B)

## Shingle:
a contiguous subsequence of words in a document is called a shingle

## Solution to Speed Up the Use of Shingles for Near Document Similarity
* adopt a probabilistic approach to reduce the number of comparisons we must make
For each document D compute the sketchD[ i ] (具体没看)

# Crawlwer
## basic conpect
* A web crawler is a computer program that visits web pages in an organized way
* Google’s crawler is called googlebot; Yahoo’s web crawler is/was called Yahoo! Slurp;Bingbot, standard crawler
* Robots.txt: There is a protocol that defines the limitations for a web crawler as it visits a website; its definition is here. Website
request on what can(not) be crawled by placing a robots.txt file in the root directory

## 4 normalization rules
* Convert the scheme and host to lower case.
* Capitalize letters in escape sequences.
* Decode percent-encoded octets of unreserved characters.
* Remove the default port.

## A spider trap
* is when a crawler re-visits the same page over and over again
## Coordination of Distributed Crawling three strategies
* Independent:no coordination, every process follows its extracted links
* Dynamic assignment: a central coordinator dynamically divides the web into small partitions and assigns each partition to a process
* Static assignment:Web is partitioned and assigned without a central coordinator before the crawl starts

 - Firewall mode:
 - cross-mode
 - exchange mode
* If exchange mode is used, communication can be limited by:
Batch communication:
Replication

## The behavior of a Web crawler is the outcome of a combination of policies:
A selection policy that states which pages to download.
A re-visit policy that states when to check for changes to the pages.
A politeness policy that states how to avoid overloading websites.
A parallelization policy that states how to coordinate distributed web crawlers.
## Cho and Garcia-Molina proved the surprising result that, in terms of average freshness, the uniform policy outperforms the proportional policy in both a simulated Web and a real Web crawl.
## siteMap
* A sitemap is a list of pages of a web site accessible to crawlers
* This helps search engine crawlers find pages on the site
* XML is used as the standard for representing sitemaps

## cralwer code

 ``` java
 public class Controller {
 public static void main(String[] args) throws Exception {
 String crawlStorageFolder = "/data/crawl";
 int numberOfCrawlers = 7;
 CrawlConfig config = new CrawlConfig();
 config.setCrawlStorageFolder(crawlStorageFolder);
 /*
 * Instantiate the controller for this crawl.
 */
 PageFetcher pageFetcher = new PageFetcher(config);
 RobotstxtConfig robotstxtConfig = new RobotstxtConfig();
 RobotstxtServer robotstxtServer = new RobotstxtServer(robotstxtConfig, pageFetcher);
 CrawlController controller = new CrawlController(config, pageFetcher, robotstxtServer);

 controller.addSeed("http://www.viterbi.usc.edu/");

 controller.start(MyCrawler.class, numberOfCrawlers);
   }
 }

public class MyCrawler extends WebCrawler {
   private final static Pattern FILTERS = Pattern.compile(".*(\\.(css|js|gif|jpg"+ "|png|mp3|mp3|zip|gz))$");

  @Override9
  public boolean shouldVisit(Page referringPage, WebURL url) {
    String href = url.getURL().toLowerCase();
   return !FILTERS.matcher(href).matches() && href.startsWith("http://www.viterbi.usc.edu/");
  }

  @Override
  public void visit(Page page) {
  String url = page.getWebURL().getURL();
  System.out.println("URL: " + url);
  if (page.getParseData() instanceof HtmlParseData) {
  HtmlParseData htmlParseData = (HtmlParseData) page.getParseData();
  String text = htmlParseData.getText();
  String html = htmlParseData.getHtml();
  Set<WebURL> links = htmlParseData.getOutgoingUrls();
  System.out.println("Text length: " + text.length());
  System.out.println("Html length: " + html.length());
  System.out.println("Number of outgoing links: " + links.size());
 }
}
``` ```


```
