

# Final CSCI 572 Exam Summary

## 1. Map/Reduce

### Basic Concept:

* MapReduce is a methodology for exploiting parallelism in computing clouds (racks of interconnected processors)

* It has become a common way to analyze very large amounts of data

* MapReduce was developed at Google; used by Google, Yahoo and Facebook



### Hadoop

* Apache Hadoop is an open-source implementation of map/reduce written in Java for distributed storage and distributed processing of very large data sets on computer clusters built from commodity hardware.  
* The core of Apache Hadoop consists of a storage part, known as Hadoop Distributed File System (HDFS), and a processing part called MapReduce. 

### Parallelization is hard

*  How to assign work units to worker threads

* what if we have more work units than threads

* how do we aggregate results

* how to know all the workers have finished

* fortunately, MapReduce solve all the problem

* When we run a multithreaded program, we don’t know what order threads run in, nor do we know when they will interrupt one another. Therefore, we need synchronization.

### Typical MapReduce Cluster Architecture

* Each rack of cpu’s contains between 16-64 nodes

* Nodes within a single rack are connected by gigabyte Ethernet

* Each rack is connected to another rack by a switch with speeds of 2-10 Gbps

* Individual cpu’s can fail; switches between racks can fail

### Distributed File System

* cluster computing is defined as a collection of compute nodes stored on racks with racks connected by switches

* The inter-rack bandwidth is generally faster than the intra-rack bandwidth

* It is assumed that components will often fail, e.g.

    –Loss of single compute node

   –Loss of a single disk, causing a node to fail

   –Loss of an entire rack (the interconnecting switch fails) 

* The solution to the constant failure problem is

  –Files are stored redundantly

  –Computations are divided into tasks such that if any one task fails it can be restarted without affecting other tasks

  -machines are constantly pinged

### The Map/Reduce steps

​	1.A large number of records are broken into segments

​	2.Map function: extract something of interest from each segment

​	3.Group and sort intermediate results from each segment

​	4.Reduce function: aggregate intermediate results

​	5.Generate final output

**Key idea:** to re-phrase problems in such a way that the input can be divided into parts and operated on in parallel and the results combined to produce  a solution to the original problem

### Fault Tolerance  in MapReduce

1. If a task crashes:

   –Retry on another node

   – If the same task repeatedly fails, fail the job or ignore that input block

2. If a node crashes:

   –Relaunch its current tasks on other nodes

   –Relaunch any maps the node previously ran

3. If a task is going slowly (straggler):

   –Launch second copy of task on another node

   –Take the output of whichever copy finishes first, and kill the other one

### Coping with Node Failure

* Worst case: the compute node where the Master is executing fails

  –Result: the entire map-reduce job must be restarted

  Other failures are less severe and are handled by the Master

* The compute node of a Map worker fails

  –This is detected by the Master and all Map tasks that were assigned are re-done

  –The Master sets the status of each Map task to idle and re-schedules them when a worker becomes available

  –The Master informs each Reduce task of the location of its new input

* The compute node of a Reduce worker fails

  –The Master sets the status of its currently executing Reduce tasks to idle and they will be re-scheduled on another reduce worker later

## 2. The Search Engine Business Model Advertising
### Types of Online advertising

* Banner advertising
* Pay-per-click Advertising
* Website Adversiting
* Affiliate Marketing
* Social Media Marketing



### Search Engine Optimization

* Search Engine Optimizers focus is to develop and refine a company’s online presence; 

* Search Engine Optimization (SEO) involves:

  –Making pages show up higher in search engine’s organic results

  –Optimizing content to target certain keyword phrases

  –Developing web page content that responds to each seeker’s interests

* There are many companies who claim to do SEO: Boostability, Icrossing,Inc. ,Iprospec.

### How to get number 1 in Google?

  * Use paid search:Pay enough for a click, Google, Yahoo!



### Long Tailed Keywords can be valueable

  * Long-tail keywords are search queries made up of three-four word phrases that are very specific to a product, good, or service that’s being sold. 

  *  The conversion rate for long-tail keywords is approximately 2.5 times higher  than it is for head (shorter) keywords.
  * long-tail keywords that present less competition also offer lower cost-per-click prices since few marketers are targeting them

### Keyword Phrase

  * Use Key Phrases in the content on your page

  * Develop meta data with Key Phrases

  * Name directories, files and images with the same key words or phrases

### Four types of keyword matching options can help you refine your ad targeting

  1.Broad Match: default option, support expanded matches, including synonyms and plurals; less targeted than exact or phrase matches

  2.Exact Match: The search query must exactly match your keyword; ignore function words (in, to), conjunctions (for, but), articles (a, the) and other words that don’t impact
  the intent of the query

  3.Phrase Match: Your ad appears when users search on the exact phrase ;and when their search contains additional terms as long as the keyword phrase is in exactly the same order

  4.Negative Keyword: Negative keywords allow you to eliminate searches that you know are not related to your
  message


###  Capabilities of  Search Engine Ad Servers

  * The typical common functionality of ad servers includes:

    –Uploading the creative (creative is the term used to describe the ad that will appear) 

    –Maintaining business rules for placing ads

    –Targeting ads to different users, or content

    –Optimizing appearance of a set of creatives based upon results (choosing the most effective ad) 

    -Reporting impressions, clicks, post-click activities, and interaction metrics. 

  * Advanced functionality may include:

    –Frequency capping creatives so users only see messages a limited amount of time. 

    -Sequencing  creatives so users see messages in a specific order

  * Advertisers with accounts on Google’s Adwords can define a set of criteria for placement of their ad; typical criteria might include rules

  * dayparting is a technique that involves increasing your bids during times when conversion rates are typically above average, and decreasing them when rates are typically below average

### What model do many search engines (including Google) use for advertising?
  pay-per-click (PPC) model

### What is Adwords?
It’s Google’s program for accepting pay-per-click ads. For every keyword phrase there is an auction where bidders agree to pay a certain amount to Google if their ad is clicked on.
### What is AdSense?
AdSense from Google is a service for placing Google ads on web pages.  use wordNet

### What is Ad Exchange?
An ad exchange is a technology platform that facilitates the buying and selling of media advertising inventory from multiple ad networks. 

###	What is DoubleClick ad exchange?
DoubleClick Ad Exchange is a real-time marketplace owned by Google for buying and selling advertising. DoubleClick's technology is called the Dynamic Advertising Reporting and Targeting system, or DART, 

### What is real-time-bidding? (RTB)
RTB is a protocol for two digital advertising companies to transact. 
### Which kinds of ads besides cost-per-click do Google offer in AdSense?
(1) Cost per Thousand displays, CPM
(2) Cost per Engagement, where advertisers only pay when users actively engage with ads
### Google AdWords Auction Rules

  * Each bidder specifies (i) search terms that trigger its bid and (ii) the amount to bid for each search term. 
  * Google estimates the “click-through rate” that each bidder would have if it were listed in the first spot. 
  * Google is paid only when an ad gets clicked. 

### Probability of the Ad Being Clicked can depend upon:

* Historical click performance of the ad

* Landing page quality

* Relevance to the user

* User click through rates

### AdSense 

* is a service for placing Google ads on third party web pages 

* typically blogs use AdSense to monetize their site
* AdSense Ads on Websites are Not Always Relevant
* Adsense Content Matching Originally Based on WordNet(WordNet is a semantic lexicon for the English language: WordNet is a semantic lexicon for the English language. It groups English words into sets of synonyms called synsets, provides short, general definitions, and records the various semantic relations between these synonym sets)

### Ad exchange

* An ad exchange is a technology platform that facilitates the buying and selling of media advertising inventory from
  multiple ad networks.

### Web beacons

* Web beacons are small strings of HTML code that are placed in a Web page. They are sometimes called “clear GIFs”, pixel tags, web bugs, or tracking bugs . Web beacons are most often used in conjunction with cookies

### tracking pixel
* A very small (typically transparent, 1px*1px) image in the web page that permit the loading web page to be tracked by web servers.  


### click through rate
*  the ratio of users who click on a specific link to the number of total users who view a page, email, or advertisement.

## 3. Knowledge-based System

### Knowledge bases

* A knowledgebase (KB) is a technology used to store complex structured and unstructured information used by a computer system. 

* A knowledge-based system consists of two elements:

  1.a knowledge-base that represents facts about the world, and 

  2.an inference engine that can reason about those facts (and use rules and other forms of logic to deduce new facts or highlight inconsistencies)

* The term "knowledge-base" was coined to distinguish this form of knowledge store from the more common and widely used term database. Examples: Freebase, Google's Knowledge Graph, Apple's Siri, IBM’s Watson
* The representation of knowledge in a knowledgebase is an object model(ontology---arbitrary complex relations between concepts can be expressed as well, e.g. (X marriedToY; or A worksFor B; or C locatedIn D, etc ))
* An Early Open KnowledgeBase is DBpedia
* KnowledgeBases are Labeled MultiGraphs(is a graph which is permitted to have multiple edges that have the same end nodes. Two vertices may be connected by more than one edge)
* different notations: 1. RDF(resources description format, including subject, predicate and object) 2. logical notation

### Inference engine

* Define: •An inference engine is a component of a system that applies logical rules to a knowledgebase to deduce new information 

* Inference engines work primarily in one of two modes:  forward chaining(search engine use) and backward chaining 

  - Forward chaining starts with the known facts and asserts new facts. (Modus ponies)

  - Backward chaining starts with goals, and works backward to determine what facts must be asserted so that the goals can be achieved.

* An inference engine cycles through three sequential steps: match rules, select rules, and execute rules

### Knowledge Graph Enhances Google Search in 3 main ways 

* To improve the variety of search results
* To provide deeper and broader results
* To provide the best summary

### Wikipedia’s Five Pillars 

1.Encyclopaedia  2.Neutral point of view (NPOV) 3.Free content 4.Be civil 5.No firm rules

## 4. Query Processing

### Search engine's task

1. minimally return documents that contain the query terms

- Use inverted index and cosine similarity to identify matching documents
- Try to identify the K top scoring documents and return those

2. determene waht the users is actually trying to accomplish

### Speeding up indexed Retrieval

for process 1:

* consider only Query Terms with High-idf scores
* Consider Only Docs Containing Several Query Terms
* Introduce Champion Lists Heuristic( champion lists: Pre-compute for each dictionary term t, the r docs of highest weight (tf-idf) in t’s postings)
* Introduce an Authority Measure
* Reorganize the Inverted List:order all postings by g(d) the authority measure
* High and Low Lists Heuristic-•For each term, we maintain two postings lists called high and low

### Net Score

* Define: a simple total score combining cosine relevance and authority
* Net-score(q,d) = g(d) + consine(q, d)-----–For query q and document d its net-score is a combination of relevance and authority

### Ranking factors category

1.Content factors(relevant terms, keyword in internal links)    2.User signals(click through rate, time on site)    3.Technical factors(domain visibility, .com sites are favored)   4.User experience  5.Social signals

## 5. Spell Checking and Correction

### Twp Main Spelling Tasks

1. Spelling Error Dection  2. Spelling Error Correction

### Three types of Spelling errors

1. Non-word errors  : the larger the dicitionary the better

   Correction: generate candidates from the dictionary that are close to the error

   - shortest weighted edit distance: –Edit distance is a way of quantifying how dissimilar two strings (e.g., words)nare to one another by counting the minimumnnumber of operations required to transform one string into the other (Levenshtein uses: removal, insertion, substitution of a character)
   - highest noisy channel probabilty: use probabilities to select the most obvious candidates

2. Typographical errors.    context are needed

3. congitive error(sounds alike).   Sounded algorithm

### Casues of Misspeelings

typing quickly, keyboard adjency, inconsistent rules, ambiguous word breaking, new words

### Noisy Channel Model

* This model suggests treating the misspelled word as if a correctly spelled word has been distorted by being passed through a noisy communication channel; Noise in this case refers to substitutions, insertions or deletions of letters  

### Error Test Sets 

–Wikipedia’s list of common English misspelling; –Aspell filtered version of that list; –Birkbeck spelling error corpus

### n-gram model

- Define: An n-gram model is a type of probabilistic language model for predicting the next item in a sequence
- two benfits for applyiny to spelling correction: simplicity and scalability. Back-off algorithm.
 
### Norvig Algorithm- A Complete Spelling Correction Program
* deletion, transposition, alteration, insertion

### Edit Distance & Levenshtein Algorithm

* Edit Distance: the minimum edit distance between two strings is the minimum number of editing operations (insertion,deletion,substitution) needed to transform one into the other

* Levenshtein Algorithm- For computing minimum edit distance: DP, time--O(mn), space--O(nm), Backtrace--O(n+m)
* Weighted Edit Distance: why? –spell correction: some letters are more likely to be mistyped than others
* a confusion matrix is a specific table layout that allows visualization of the performance of an algorithm; each column of the matrix represents the instances in a
  predicted class while each row represents the instances in an actual class (or viceversa) the
* In Levenshtein algorithm to compute the minimum edit distance D(n, m) for two strings X and Y, what is the recursion formula?
D(i, j)= min( D(i-1, j)+1  // for deletion 
           D(i, j-1)+1  // for insertion
           D(i-1, j-1)+2 // for substitution, if X[i]!=Y[j],
           D(i-1, j-1)   // if X[i]==Y[j]
)
For initial states, D(i, 0)=i, D(0, j)=j

## 6. Rich Text Snippets

### Snippet

* Google introduced Snippet, a short description of, or excerpt from, a website which appears in Google search results. Snippets are created automatically based on the site's content and the query terms  
* Snippets are computed at query time
* Snippets Can Vary for a Single Site Depending Upon the Query
* if the snippet begins with ellipses (. . . . ) that indicates the snippet was excerpted from a larger body of text and text preceding the ellipses was omitted
* when ellipses follow at the end of the snippet, the snippet was truncated
* the maximum length of a snippet is 156 characters
* Google uses the meta description (if there is one) as the default for a snippet if there is an Open Directory Project listing for a website, Google uses its meta description over the meta description in the web page

### Snippets are an Instance of Summarization

* Two general approaches to automatic summarization:

  •[extraction](https://en.wiktionary.org/wiki/Extraction)  Extractive methods work by selecting a subset of existing words, phrases, or sentences in the original text to form the summary

  •[abstraction](https://en.wikipedia.org/wiki/Abstract_(summary)) abstractive methods build an internal semantic representation and then use natural language generation techniques to create a summary that is closer to what a human might express 

### Featured Snippets

* Three types: 1.Paragraph featured snippet. 2.List featured snippet. 3.Table featured snippet

### PAA(People Also Ask)

* The “People Also Ask” box is a Google universal Search Result Page result that answers questions related to the searcher’s initial query. 

### Rich Snippet

* Define: A rich snippet shows extra information between the URL and the description. 
* Advantages of Rich Snippets
  - Webmasters: Provides webmasters the ability to add useful information to their web search result snippets to help Google make sense of their bits.
  - Purpose Provides more information to a user about the content that exists on page so they can decide which result is more relevant for their query. 
* Google, Yahoo, and Bing agree on a single standard of rich snippet  on microdata format
* Entities in Rich Snippet Encodings: Software applications, events, people, products, videos and breadcrumb( a breadcrumb trail on a page indicates the page's position in 
  the  site hierarchy. A user can navigate all the way up in the site hierarchy, one level at a time, by starting from the last breadcrumb in the breadcrumb trail
• for example, Books › Authors › Ann Leckie ›...
* The itemprop attribute is used to label properties of a movie
* add the itemscope element to the HTML tag that encloses information about the item, and you can specify the type of item using the itemtype attribute like this
## 7. Clustering

### What's Clustering?

* Clustering: the process of grouping a set of objects into classes of similar objects
* Clustering is the most common form of unsupervised learning(learning from raw data, as opposed to supervised learning where a classification of examples is given)

### Reason for Search Engines cluster documents

* For improving recall in search applications
* For speeding up vector space retrieval
* Cleaner user interface
* Automatic thesaurus generation by clustering related terms 

  Ps: Yippy.com emphsizes clusters of results;  

​       Yahoo! Hierarchy isn’t clustering but is the kind of output you want from clustering 

### What is a Good clustering?

* Internal criteria : A good clustering will produce high quality clusters in which:

   –the intra-class (that is, intra-cluster) similarity is high

   –the inter-class similarity is low

### Three Criteria of Adequacy for clustering methods

* produced clustering is stable even under significant growth
* The method is stable in the sense that small errors in the description of objects lead to small changes in the clustering
* The method is independent of the initial ordering of the objects

### Classification VS Clustering

* Classification is supervised learning( given a set of predefined classes and want to know which class a new object belongs to) and clustering is unsupervised learning(tries to group a set of objects and find whether there is some relationship between the objects)

  –Clustering requires a. an algorithm, b. a similarity measure, and c. a number of clusters

  –classification has each document labeled in a class and an algorithm that assigns new documents to one of the classes

### Hard vs Soft Clustering

* Hard clustering: Each document belongs to exactly one cluster
* Soft clustering: A document can belong to more than one cluster

### What definition of Similarity/Distance Will Be Used

Cosine similarity or Euclidean distance

### Clustering Algorithms

* Partitioning Based Algorithms: divide a set of N items into K clusters (top-down)
* Hierarchica：agglomerative and divisivel

### K-Means  Clustering Algorithm

* What is that?

  - Choose k random data items out of the n items; call these items the means; they designate the prototype or name of the cluster

  - Refine it iteratively
    - Associate each of the n-k items with one of the k clusters choosing the cluster  that it is nearest to; 

* Optimal K-Means Clustering is NP-hard

* A Popular Version of the  K-Means Clustering Algorithm has two steps: 

   - Assignment step: Assign each observation to the cluster whose mean yields the least within-cluster 

     sum of squares.

   - update step: Calculate the new means to be the centroids of the observations in the new clusters.

* Time Complexity: O(iknm), m is the size of the vector, n is the number of vectors (items), k is the number of clusters, i number of iterations, depends upon convergence
   4 parameters that affect the computing time
* this is an example of a greedy algorithm
* criteria for determine k-mean algorithm terminates 
	- After a fixed number of iterations
	- When the document partition is unchanged
	- When the centroid positions don’t change

### Hierarchical Clustering Algorithms
* Hierarchical Agglomerative Clustering Algorithm - a Bottom Up Approach

  –1. Place each of N documents into a class of its own.

  –2. Compute all pairwise document-document similarity coefficients --- Total of N(N-1)/2 coefficients

  –3. Form a new cluster by combining the most similar pair of current clusters i and j 

  –4.Repeat step 3 if the number of clusters left is great than 1.

* Divisive Clustering Algorithm

### The methods to compute the distance between two clusters

Ps: the Centroid of a cluster is the component-wise average of the vectors in a cluster, which is itself a vector

1.Center of Gravity: clusters whose centroids are the most cosine similar

2.Average Link: average distance between pairs of elements

3.Single Link: distance of the most cosine similar

4.Complete Link: distance of the furthest points, the least cosine similar

### Dendrogram

* A dendrogram is a tree diagram frequently used to illustrate the arrangement of the clusters produced by hierarchical clustering

### Two ways to label clusters

* Show titles of typical documents
* show words/phrases proominent in cluster

### Ways to evaluate Clustering algorithm(from best to weakest) 

* Purely quantitative measures > Ground “truth” comparison > user inspection > anecdotal

### Purity and Rand Index

* Purity Measure - accuracy is measured by the number of correctly assigned documents divided by the total number of documents;
* The Rand index (RI) measures the percentage of decisions that are correct. 

## 8. Question Answering

### What is that?

* Question Answering (QA) is concerned with building systems that automatically answer questions posed by humans in a natural language. It combines information retrieval and natural language processing.
* Google Approach:
  - Original approach: find the question as a string on the web, return next sentence. Improved by introducing Knowlegde graph and N-grams

### Some prouducts designed for QA

* Siri, Ask.com, IBM's Watson, Google's knowledge graph

### 3 Main phases for QA

1. question processing: Captures the semantics of the question. 
2.  Passage retrieval: Extracts and ranks passages using surface-text techniques  
3.  answer processing: Extracts and ranks answers using NL techniques

### Ranking Retrieved Passages 6 criteria
1. The number of named entities of the right type in the passage
2. The number of question keywords in the passage
3. The longest exact sequence of question keywords that occurs in the passage
4. The rank of the document from which the passage was extracted
5. The proximity of the keywords from the original query to each other. 
6. The N-gram overlap between the passage and the question;

### Passage ordering is performed using a sort that involves three scores:
1. The number of words from the question that are recognized in the same sequence in the window
2. The number of words that separate the most distant keywords in the window
3. The number of unmatched keywords in the window

### Ranking candidate answers approaches

* Part-of-Speech Tagging , Parsing,  Named Entity Extraction, Determining Semantic Relations, Dictionaries

### Microsoft AskMSR

* AskMSR is a question answering system developed at Microsoft, rather than doing sophisticated linguistic analyses it relies upon information scattered around the web

* Steps:
  1.  Query rewriting:Some query rewrites are more reliable than others
  2. Query Search Engine: Send all rewrites to a Web search engine; only rely on search engine's "snippets"
  3. Mining N-Grams: Weight of an n-gram: occurrence count, each weighted by “reliability” (weight) of
     rewrite that fetched the document
  4. Filtering N-Grams: match "data-type filters" of each question type
  5. Tiling the Answers: merged, discard old n-grams; repeat, utile no more overlap

### Mean Reciprocal Rank(MMR)-- judge the quality of answers

* The mean reciprocal rank is a statistical measure for evaluating any process that produces a list of possible responses to a sample of queries, ordered by probability of correctness. 
* Formulate: MMR = Sum(1/rank i) / Q

## 9. Classfication

### Classfication Methods

* Manual classification: Yahoo! Directory
* Using Vector Spaces: Two premise
  - Documents in the same class form a contiguous region of space(contiguity hypothesis)
  - Documents from different classes don’t overlap (much)

### Relevance Feedback

* Define: User feedback on relevance of docs in initial set of results, which can be iterations

### Rocchio Method is used for Relevance feedback

- Rocchio is limited to determining two classes: relevant and non-relevant documents
- Assign d to class c iff |u(c) - v(d)| < |u(c) - v(d)|  - b, assign d to class c iff the distance from d to c is less than the distance  to all other centroids, even including a small factor b 
- The centroid is the center of mass (or vector average) of a set of points.The centroid may not correspond to a document in your set.
- Rocchio chooses the centroid as the representative for each class 
- Classification Rule: Given a new document, take its vector representation and determine the nearest centroid
- Note: This method does not guarantee that classifications are consistent with the given training data
- Boundaries in  Rocchio Classification are Hyperplanes: divide any line, any plane, any higher dimensional spaces

### kNN- k Nearest Neighbor Method ～ second classfication algorithm

* Distance function measurements: Euclidean(commonly used), Manhattan, Minkowski
* Other names: Case-based learning ,Memory-based learning, Lazy learning
* Non-learning step, just store the labeled training examples
* Two phases: training phase(consists only of storing the feature vectors and class labels of the training samples) and classification phases(k is a user-defined constant, and an unlabeled vector (a query) is classified by assigning the label which is most frequent among the k training samples nearest to that query point.)
* Choosing the optimal value for K is best done by first inspecting the data; generally, a large k value is more precise as it reduces the overall noise; Historically, the optimal k is between 3- 10
* Two drawbacks: performance, distance metric
* No feature selection and training necessary; sacles well with large number of classes; mostly, more accurate than Rocchio
* For binary choice problems choose k odd, to avoid tied votes

### Voroni Diagram

* Define: A Voronoi diagram is a partitioning of a plane into regions based on distance to points in a specific subset of the plane. 1nn


## 10.  Click Fraud & Legal Issue(not required)

### Two basic problems with pay-per-click model

* Good click-through rates(CTRs) are still not indicative of good conversion rate
* not offer any "built-in" fundamental protection mechanism against click fraud

### Definition of Invalid Clicks

Click Fraud occurs in pay-per-click online advertising when a person, automated script or computer program imitates a
legitimate user of a web browser clicking on an ad, for the purpose of generating an improper charge per click

Ps: Google utiliize 4 layers of click fraud detection,which can be divided into Filters, Offline analysis and investigations 

### Anomalous Behavior to indicate Click Fradu

* Keyword performace
* Abnormal number of clicks from the same IP address
* Decline in the number of conversions 
* Large numbers of visitors who leave your site quickly 

### Botnets

* Define: A botnet is a large collection of well-connected compromised machines, that interact to take part in some distributed task

* Botnets attacks: Distributed Denial of Service (DDoS), Information Leakage, Click Fraud , Identity Fraud

### Tuzhilin

* Fundamental problem: There is no conceptual definition of invalid clicks that can be operationalized 

* Confusion matrix

  |              |         | Click classified by filters as |                     |
  | ------------ | ------- | ------------------------------ | ------------------- |
  |              |         | Invalid                        | Valid               |
  | Actual Click | Invalid | True Positive (TP)             | False Negative (FN) |
  |              | Valid   | False Positive (FP)            | True Negative (TN)  |

Note that TP + TN + FP + FN = N. 

and the accuracy rate of a filter is equal to (TP + TN)/N 

and the error rate to  (FP + FN)/N. 

### Intellectual Property

* Categories: copyright(Books, maps, paintings, web page, charts), patents, trademarks, trade secrets
* Trademark: •A trademark is a word, words, phrase, symbol or design that is legally registered as representing a company or product. 
* A trade secret is a formula, practice, process, design, instrument, pattern, or compilation of information which is not generally known or reasonably ascertainable, by which a business can obtain an economic advantage over competitors or customers. 