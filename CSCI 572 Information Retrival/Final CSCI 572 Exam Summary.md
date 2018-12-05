
<!-- TOC -->

- [1. Final CSCI 572 Exam Summary](#1-final-csci-572-exam-summary)    - [1.1. Map/Reduce](#11-mapreduce)        - [1.1.1. Basic Concept:](#111-basic-concept)        - [1.1.2. Hadoop](#112-hadoop)        - [1.1.3. Parallelization is hard](#113-parallelization-is-hard)        - [1.1.4. Typical MapReduce Cluster Architecture](#114-typical-mapreduce-cluster-architecture)        - [1.1.5. Distributed File System](#115-distributed-file-system)        - [1.1.6. The Map/Reduce steps](#116-the-mapreduce-steps)        - [1.1.7. Fault Tolerance  in MapReduce](#117-fault-tolerance--in-mapreduce)        - [1.1.8. Coping with Node Failure](#118-coping-with-node-failure)    - [1.2. The Search Engine Business Model Advertising](#12-the-search-engine-business-model-advertising)        - [1.2.1. Types of Online advertising](#121-types-of-online-advertising)        - [1.2.2. Search Engine Optimization](#122-search-engine-optimization)        - [1.2.3. How to get number 1 in Google?](#123-how-to-get-number-1-in-google)        - [1.2.4. Long Tailed Keywords can be valueable](#124-long-tailed-keywords-can-be-valueable)        - [1.2.5. Keyword Phrase](#125-keyword-phrase)        - [1.2.6. Four types of keyword matching options can help you refine your ad targeting](#126-four-types-of-keyword-matching-options-can-help-you-refine-your-ad-targeting)        - [1.2.7. Capabilities of  Search Engine Ad Servers](#127-capabilities-of--search-engine-ad-servers)        - [1.2.8. What model do many search engines (including Google) use for advertising?](#128-what-model-do-many-search-engines-including-google-use-for-advertising)        - [1.2.9. What is Adwords?](#129-what-is-adwords)        - [1.2.10. What is AdSense?](#1210-what-is-adsense)        - [1.2.11. What is Ad Exchange?](#1211-what-is-ad-exchange)        - [1.2.12. What is DoubleClick ad exchange?](#1212-what-is-doubleclick-ad-exchange)        - [1.2.13. What is real-time-bidding? (RTB)](#1213-what-is-real-time-bidding-rtb)        - [1.2.14. Which kinds of ads besides cost-per-click do Google offer in AdSense?](#1214-which-kinds-of-ads-besides-cost-per-click-do-google-offer-in-adsense)        - [1.2.15. Google AdWords Auction Rules](#1215-google-adwords-auction-rules)        - [1.2.16. Probability of the Ad Being Clicked can depend upon:](#1216-probability-of-the-ad-being-clicked-can-depend-upon)        - [1.2.17. AdSense](#1217-adsense)        - [1.2.18. Ad exchange](#1218-ad-exchange)        - [1.2.19. Web beacons](#1219-web-beacons)        - [1.2.20. tracking pixel](#1220-tracking-pixel)        - [1.2.21. click through rate](#1221-click-through-rate)    - [1.3. Knowledge-based System](#13-knowledge-based-system)        - [1.3.1. Knowledge bases](#131-knowledge-bases)        - [1.3.2. Inference engine](#132-inference-engine)        - [1.3.3. Knowledge Graph Enhances Google Search in 3 main ways](#133-knowledge-graph-enhances-google-search-in-3-main-ways)        - [1.3.4. Wikipedia’s Five Pillars](#134-wikipedias-five-pillars)    - [1.4. Query Processing](#14-query-processing)        - [1.4.1. Search engine's task](#141-search-engines-task)        - [1.4.2. Speeding up indexed Retrieval](#142-speeding-up-indexed-retrieval)        - [1.4.3. Net Score](#143-net-score)        - [1.4.4. Ranking factors category](#144-ranking-factors-category)    - [1.5. Spell Checking and Correction](#15-spell-checking-and-correction)        - [1.5.1. Twp Main Spelling Tasks](#151-twp-main-spelling-tasks)        - [1.5.2. Three types of Spelling errors](#152-three-types-of-spelling-errors)        - [1.5.3. Casues of Misspeelings](#153-casues-of-misspeelings)        - [1.5.4. Noisy Channel Model](#154-noisy-channel-model)        - [1.5.5. Error Test Sets](#155-error-test-sets)        - [1.5.6. n-gram model](#156-n-gram-model)        - [1.5.7. Norvig Algorithm- A Complete Spelling Correction Program](#157-norvig-algorithm--a-complete-spelling-correction-program)        - [1.5.8. Edit Distance & Levenshtein Algorithm](#158-edit-distance--levenshtein-algorithm)    - [1.6. Rich Text Snippets](#16-rich-text-snippets)        - [1.6.1. Snippet](#161-snippet)        - [1.6.2. Snippets are an Instance of Summarization](#162-snippets-are-an-instance-of-summarization)        - [1.6.3. Featured Snippets](#163-featured-snippets)        - [1.6.4. PAA(People Also Ask)](#164-paapeople-also-ask)        - [1.6.5. Rich Snippet](#165-rich-snippet)    - [1.7. Clustering](#17-clustering)        - [1.7.1. What's Clustering?](#171-whats-clustering)        - [1.7.2. Reason for Search Engines cluster documents](#172-reason-for-search-engines-cluster-documents)        - [1.7.3. What is a Good clustering?](#173-what-is-a-good-clustering)        - [1.7.4. Three Criteria of Adequacy for clustering methods](#174-three-criteria-of-adequacy-for-clustering-methods)        - [1.7.5. Classification VS Clustering](#175-classification-vs-clustering)        - [1.7.6. Hard vs Soft Clustering](#176-hard-vs-soft-clustering)        - [1.7.7. What definition of Similarity/Distance Will Be Used](#177-what-definition-of-similaritydistance-will-be-used)        - [1.7.8. Clustering Algorithms](#178-clustering-algorithms)        - [1.7.9. K-Means  Clustering Algorithm](#179-k-means--clustering-algorithm)        - [1.7.10. Hierarchical Clustering Algorithms](#1710-hierarchical-clustering-algorithms)        - [1.7.11. The methods to compute the distance between two clusters](#1711-the-methods-to-compute-the-distance-between-two-clusters)        - [1.7.12. Dendrogram](#1712-dendrogram)        - [1.7.13. Two ways to label clusters](#1713-two-ways-to-label-clusters)        - [1.7.14. Ways to evaluate Clustering algorithm(from best to weakest)](#1714-ways-to-evaluate-clustering-algorithmfrom-best-to-weakest)        - [1.7.15. Purity and Rand Index](#1715-purity-and-rand-index)    - [1.8. Question Answering](#18-question-answering)        - [1.8.1. What is that?](#181-what-is-that)        - [1.8.2. Some prouducts designed for QA](#182-some-prouducts-designed-for-qa)        - [1.8.3. Main phases for QA](#183-main-phases-for-qa)        - [1.8.4. Ranking Retrieved Passages 6 criteria](#184-ranking-retrieved-passages-6-criteria)        - [1.8.5. Passage ordering is performed using a sort that involves three scores:](#185-passage-ordering-is-performed-using-a-sort-that-involves-three-scores)        - [1.8.6. Ranking candidate answers approaches](#186-ranking-candidate-answers-approaches)        - [1.8.7. Microsoft AskMSR](#187-microsoft-askmsr)        - [1.8.8. Mean Reciprocal Rank(MMR)-- judge the quality of answers](#188-mean-reciprocal-rankmmr---judge-the-quality-of-answers)    - [1.9. Classfication](#19-classfication)        - [1.9.1. Classfication Methods](#191-classfication-methods)        - [1.9.2. Relevance Feedback](#192-relevance-feedback)        - [1.9.3. Rocchio Method is used for Relevance feedback](#193-rocchio-method-is-used-for-relevance-feedback)        - [1.9.4. kNN- k Nearest Neighbor Method ～ second classfication algorithm](#194-knn--k-nearest-neighbor-method--second-classfication-algorithm)        - [1.9.5. Voroni Diagram](#195-voroni-diagram)    - [1.10. Ps](#110-ps)<!-- /TOC -->
# 1. Final CSCI 572 Exam Summary

## 1.1. Map/Reduce

### 1.1.1. Basic Concept:

* MapReduce is a methodology for exploiting parallelism in computing clouds (racks of interconnected processors)

* It has become a common way to analyze very large amounts of data

* MapReduce was developed at Google; used by Google, Yahoo and Facebook



### 1.1.2. Hadoop

* Apache Hadoop is an open-source implementation of map/reduce written in Java for distributed storage and distributed processing of very large data sets on computer clusters built from commodity hardware.  
* The core of Apache Hadoop consists of a storage part, known as Hadoop Distributed File System (HDFS), and a processing part called MapReduce. 

### 1.1.3. Parallelization is hard

*  How to assign work units to worker threads

* what if we have more work units than threads

* how do we aggregate results

* how to know all the workers have finished

* fortunately, MapReduce solve all the problem

* When we run a multithreaded program, we don’t know what order threads run in, nor do we know when they will interrupt one another. Therefore, we need synchronization.

### 1.1.4. Typical MapReduce Cluster Architecture

* Each rack of cpu’s contains between 16-64 nodes

* Nodes within a single rack are connected by gigabyte Ethernet

* Each rack is connected to another rack by a switch with speeds of 2-10 Gbps

* Individual cpu’s can fail; switches between racks can fail

### 1.1.5. Distributed File System

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

### 1.1.6. The Map/Reduce steps

​	1.A large number of records are broken into segments

​	2.Map function: extract something of interest from each segment

​	3.Group and sort intermediate results from each segment

​	4.Reduce function: aggregate intermediate results

​	5.Generate final output

**Key idea:** to re-phrase problems in such a way that the input can be divided into parts and operated on in parallel and the results combined to produce  a solution to the original problem

### 1.1.7. Fault Tolerance  in MapReduce

1. If a task crashes:

   –Retry on another node

   – If the same task repeatedly fails, fail the job or ignore that input block

2. If a node crashes:

   –Relaunch its current tasks on other nodes

   –Relaunch any maps the node previously ran

3. If a task is going slowly (straggler):

   –Launch second copy of task on another node

   –Take the output of whichever copy finishes first, and kill the other one

### 1.1.8. Coping with Node Failure

* Worst case: the compute node where the Master is executing fails

  –Result: the entire map-reduce job must be restarted

  Other failures are less severe and are handled by the Master

* The compute node of a Map worker fails

  –This is detected by the Master and all Map tasks that were assigned are re-done

  –The Master sets the status of each Map task to idle and re-schedules them when a worker becomes available

  –The Master informs each Reduce task of the location of its new input

* The compute node of a Reduce worker fails

  –The Master sets the status of its currently executing Reduce tasks to idle and they will be re-scheduled on another reduce worker later

## 1.2. The Search Engine Business Model Advertising
### 1.2.1. Types of Online advertising

* Banner advertising
* Pay-per-click Advertising
* Website Adversiting
* Affiliate Marketing
* Social Media Marketing



### 1.2.2. Search Engine Optimization

* Search Engine Optimizers focus is to develop and refine a company’s online presence; 

* Search Engine Optimization (SEO) involves:

  –Making pages show up higher in search engine’s organic results

  –Optimizing content to target certain keyword phrases

  –Developing web page content that responds to each seeker’s interests

* There are many companies who claim to do SEO: Boostability, Icrossing,Inc. ,Iprospec.

### 1.2.3. How to get number 1 in Google?

  * Use paid search:Pay enough for a click, Google, Yahoo!



### 1.2.4. Long Tailed Keywords can be valueable

  * Long-tail keywords are search queries made up of three-four word phrases that are very specific to a product, good, or service that’s being sold. 

  *  The conversion rate for long-tail keywords is approximately 2.5 times higher  than it is for head (shorter) keywords.
  * long-tail keywords that present less competition also offer lower cost-per-click prices since few marketers are targeting them

### 1.2.5. Keyword Phrase

  * Use Key Phrases in the content on your page

  * Develop meta data with Key Phrases

  * Name directories, files and images with the same key words or phrases

### 1.2.6. Four types of keyword matching options can help you refine your ad targeting

  1.Broad Match: default option, support expanded matches, including synonyms and plurals; less targeted than exact or phrase matches

  2.Exact Match: The search query must exactly match your keyword; ignore function words (in, to), conjunctions (for, but), articles (a, the) and other words that don’t impact
  the intent of the query

  3.Phrase Match: Your ad appears when users search on the exact phrase ;and when their search contains additional terms as long as the keyword phrase is in exactly the same order

  4.Negative Keyword: Negative keywords allow you to eliminate searches that you know are not related to your
  message


### 1.2.7. Capabilities of  Search Engine Ad Servers

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

### 1.2.8. What model do many search engines (including Google) use for advertising?
  pay-per-click (PPC) model

### 1.2.9. What is Adwords?
It’s Google’s program for accepting pay-per-click ads. For every keyword phrase there is an auction where bidders agree to pay a certain amount to Google if their ad is clicked on.
### 1.2.10. What is AdSense?
AdSense from Google is a service for placing Google ads on web pages.  use wordNet

### 1.2.11. What is Ad Exchange?
An ad exchange is a technology platform that facilitates the buying and selling of media advertising inventory from multiple ad networks. 

### 1.2.12. What is DoubleClick ad exchange?
DoubleClick Ad Exchange is a real-time marketplace owned by Google for buying and selling advertising. DoubleClick's technology is called the Dynamic Advertising Reporting and Targeting system, or DART, 

### 1.2.13. What is real-time-bidding? (RTB)
RTB is a protocol for two digital advertising companies to transact. 
### 1.2.14. Which kinds of ads besides cost-per-click do Google offer in AdSense?
(1) Cost per Thousand displays, CPM
(2) Cost per Engagement, where advertisers only pay when users actively engage with ads
### 1.2.15. Google AdWords Auction Rules

  * Each bidder specifies (i) search terms that trigger its bid and (ii) the amount to bid for each search term. 
  * Google estimates the “click-through rate” that each bidder would have if it were listed in the first spot. 
  * Google is paid only when an ad gets clicked. 

### 1.2.16. Probability of the Ad Being Clicked can depend upon:

* Historical click performance of the ad

* Landing page quality

* Relevance to the user

* User click through rates

### 1.2.17. AdSense 

* is a service for placing Google ads on third party web pages 

* typically blogs use AdSense to monetize their site
* AdSense Ads on Websites are Not Always Relevant
* Adsense Content Matching Originally Based on WordNet(WordNet is a semantic lexicon for the English language: WordNet is a semantic lexicon for the English language. It groups English words into sets of synonyms called synsets, provides short, general definitions, and records the various semantic relations between these synonym sets)

### 1.2.18. Ad exchange

* An ad exchange is a technology platform that facilitates the buying and selling of media advertising inventory from
  multiple ad networks.

### 1.2.19. Web beacons

* Web beacons are small strings of HTML code that are placed in a Web page. They are sometimes called “clear GIFs”, pixel tags, web bugs, or tracking bugs . Web beacons are most often used in conjunction with cookies

### 1.2.20. tracking pixel
* A very small (typically transparent, 1px*1px) image in the web page that permit the loading web page to be tracked by web servers.  


### 1.2.21. click through rate
*  the ratio of users who click on a specific link to the number of total users who view a page, email, or advertisement.

## 1.3. Knowledge-based System

### 1.3.1. Knowledge bases

* A knowledgebase (KB) is a technology used to store complex structured and unstructured information used by a computer system. 

* A knowledge-based system consists of two elements:

  1.a knowledge-base that represents facts about the world, and 

  2.an inference engine that can reason about those facts (and use rules and other forms of logic to deduce new facts or highlight inconsistencies)

* The term "knowledge-base" was coined to distinguish this form of knowledge store from the more common and widely used term database. Examples: Freebase, Google's Knowledge Graph, Apple's Siri, IBM’s Watson
* The representation of knowledge in a knowledgebase is an object model(ontology---arbitrary complex relations between concepts can be expressed as well, e.g. (X marriedToY; or A worksFor B; or C locatedIn D, etc ))
* An Early Open KnowledgeBase is DBpedia
* KnowledgeBases are Labeled MultiGraphs(is a graph which is permitted to have multiple edges that have the same end nodes. Two vertices may be connected by more than one edge)
* different notations: 1. RDF(resources description format, including subject, predicate and object) 2. logical notation

### 1.3.2. Inference engine

* Define: •An inference engine is a component of a system that applies logical rules to a knowledgebase to deduce new information 

* Inference engines work primarily in one of two modes:  forward chaining(search engine use) and backward chaining 

  - Forward chaining starts with the known facts and asserts new facts. (Modus ponies)

  - Backward chaining starts with goals, and works backward to determine what facts must be asserted so that the goals can be achieved.

* An inference engine cycles through three sequential steps: match rules, select rules, and execute rules

### 1.3.3. Knowledge Graph Enhances Google Search in 3 main ways 

* To improve the variety of search results
* To provide deeper and broader results
* To provide the best summary

### 1.3.4. Wikipedia’s Five Pillars 

1.Encyclopaedia  2.Neutral point of view (NPOV) 3.Free content 4.Be civil 5.No firm rules

## 1.4. Query Processing

### 1.4.1. Search engine's task

1. minimally return documents that contain the query terms

- Use inverted index and cosine similarity to identify matching documents
- Try to identify the K top scoring documents and return those

2. determene waht the users is actually trying to accomplish

### 1.4.2. Speeding up indexed Retrieval

for process 1:

* consider only Query Terms with High-idf scores
* Consider Only Docs Containing Several Query Terms
* Introduce Champion Lists Heuristic( champion lists: Pre-compute for each dictionary term t, the r docs of highest weight (tf-idf) in t’s postings)
* Introduce an Authority Measure
* Reorganize the Inverted List:order all postings by g(d) the authority measure
* High and Low Lists Heuristic-•For each term, we maintain two postings lists called high and low

### 1.4.3. Net Score

* Define: a simple total score combining cosine relevance and authority
* Net-score(q,d) = g(d) + consine(q, d)-----–For query q and document d its net-score is a combination of relevance and authority

### 1.4.4. Ranking factors category

1.Content factors(relevant terms, keyword in internal links)    2.User signals(click through rate, time on site)    3.Technical factors(domain visibility, .com sites are favored)   4.User experience  5.Social signals

## 1.5. Spell Checking and Correction

### 1.5.1. Twp Main Spelling Tasks

1. Spelling Error Dection  2. Spelling Error Correction

### 1.5.2. Three types of Spelling errors

1. Non-word errors  : the larger the dicitionary the better

   Correction: generate candidates from the dictionary that are close to the error

   - shortest weighted edit distance: –Edit distance is a way of quantifying how dissimilar two strings (e.g., words)nare to one another by counting the minimumnnumber of operations required to transform one string into the other (Levenshtein uses: removal, insertion, substitution of a character)
   - highest noisy channel probabilty: use probabilities to select the most obvious candidates

2. Typographical errors.    context are needed

3. congitive error(sounds alike).   Sounded algorithm

### 1.5.3. Casues of Misspeelings

typing quickly, keyboard adjency, inconsistent rules, ambiguous word breaking, new words

### 1.5.4. Noisy Channel Model

* This model suggests treating the misspelled word as if a correctly spelled word has been distorted by being passed through a noisy communication channel; Noise in this case refers to substitutions, insertions or deletions of letters  

### 1.5.5. Error Test Sets 

–Wikipedia’s list of common English misspelling; –Aspell filtered version of that list; –Birkbeck spelling error corpus

### 1.5.6. n-gram model

- Define: An n-gram model is a type of probabilistic language model for predicting the next item in a sequence
- two benfits for applyiny to spelling correction: simplicity and scalability. Back-off algorithm.
 
### 1.5.7. Norvig Algorithm- A Complete Spelling Correction Program
* deletion, transposition, alteration, insertion

### 1.5.8. Edit Distance & Levenshtein Algorithm

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

## 1.6. Rich Text Snippets

### 1.6.1. Snippet

* Google introduced Snippet, a short description of, or excerpt from, a website which appears in Google search results. Snippets are created matically based on the site's content and the query terms  
* Snippets are computed at query time
* Snippets Can Vary for a Single Site Depending Upon the Query
* if the snippet begins with ellipses (. . . . ) that indicates the snippet was excerpted from a larger body of text and text preceding the ellipses was omitted
* when ellipses follow at the end of the snippet, the snippet was truncated
* the maximum length of a snippet is 156 characters
* Google uses the meta description (if there is one) as the default for a snippet if there is an Open Directory Project listing for a website, Google uses its meta description over the meta description in the web page

### 1.6.2. Snippets are an Instance of Summarization

* Two general approaches to matic summarization:

  •[extraction](https://en.wiktionary.org/wiki/Extraction)  Extractive methods work by selecting a subset of existing words, phrases, or sentences in the original text to form the summary

  •[abstraction](https://en.wikipedia.org/wiki/Abstract_(summary)) abstractive methods build an internal semantic representation and then use natural language generation techniques to create a summary that is closer to what a human might express 

### 1.6.3. Featured Snippets

* Three types: 1.Paragraph featured snippet. 2.List featured snippet. 3.Table featured snippet

### 1.6.4. PAA(People Also Ask)

* The “People Also Ask” box is a Google universal Search Result Page result that answers questions related to the searcher’s initial query. 

### 1.6.5. Rich Snippet

* Define: A rich snippet shows extra information between the URL and the description. 
* Advantages of Rich Snippets
  - Webmasters: Provides webmasters the ability to add useful information to their web search result snippets to help Google make sense of their bits.
  - Purpose Provides more information to a user about the content that exists on page so they can decide which result is more relevant for their query. 
* Google, Yahoo, and Bing agree on a single standard of rich snippet  on microdata format
* Entities in Rich Snippet Encodings: Software applications, events, people, products, videos and breadcrumb( 
  - a breadcrumb trail on a page indicates the page's position in the  site hierarchy. A user can navigate all the way up in the site hierarchy, one level at a time, by starting from the last breadcrumb in the breadcrumb trail)
* The itemprop attribute is used to label properties of a movie
* add the itemscope element to the HTML tag that encloses information about the item, and you can specify the type of item using the itemtype attribute like this
## 1.7. Clustering

### 1.7.1. What's Clustering?

* Clustering: the process of grouping a set of objects into classes of similar objects
* Clustering is the most common form of unsupervised learning(learning from raw data, as opposed to supervised learning where a classification of examples is given)

### 1.7.2. Reason for Search Engines cluster documents

* For improving recall in search applications
* For speeding up vector space retrieval
* Cleaner user interface
* matic thesaurus generation by clustering related terms 

  Ps: Yippy.com emphsizes clusters of results;  

​       Yahoo! Hierarchy isn’t clustering but is the kind of output you want from clustering 

### 1.7.3. What is a Good clustering?

* Internal criteria : A good clustering will produce high quality clusters in which:

   –the intra-class (that is, intra-cluster) similarity is high

   –the inter-class similarity is low

### 1.7.4. Three Criteria of Adequacy for clustering methods

* produced clustering is stable even under significant growth
* The method is stable in the sense that small errors in the description of objects lead to small changes in the clustering
* The method is independent of the initial ordering of the objects

### 1.7.5. Classification VS Clustering

* Classification is supervised learning( given a set of predefined classes and want to know which class a new object belongs to) and clustering is unsupervised learning(tries to group a set of objects and find whether there is some relationship between the objects)

  –Clustering requires a. an algorithm, b. a similarity measure, and c. a number of clusters

  –classification has each document labeled in a class and an algorithm that assigns new documents to one of the classes

### 1.7.6. Hard vs Soft Clustering

* Hard clustering: Each document belongs to exactly one cluster
* Soft clustering: A document can belong to more than one cluster

### 1.7.7. What definition of Similarity/Distance Will Be Used

Cosine similarity or Euclidean distance

### 1.7.8. Clustering Algorithms

* Partitioning Based Algorithms: divide a set of N items into K clusters (top-down)
* Hierarchica：agglomerative and divisivel

### 1.7.9. K-Means  Clustering Algorithm

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

### 1.7.10. Hierarchical Clustering Algorithms
* Hierarchical Agglomerative Clustering Algorithm - a Bottom Up Approach

  –1. Place each of N documents into a class of its own.

  –2. Compute all pairwise document-document similarity coefficients --- Total of N(N-1)/2 coefficients

  –3. Form a new cluster by combining the most similar pair of current clusters i and j 

  –4.Repeat step 3 if the number of clusters left is great than 1.

* Divisive Clustering Algorithm

### 1.7.11. The methods to compute the distance between two clusters

Ps: the Centroid of a cluster is the component-wise average of the vectors in a cluster, which is itself a vector

1.Center of Gravity: clusters whose centroids are the most cosine similar

2.Average Link: average distance between pairs of elements

3.Single Link: distance of the most cosine similar

4.Complete Link: distance of the furthest points, the least cosine similar

### 1.7.12. Dendrogram

* A dendrogram is a tree diagram frequently used to illustrate the arrangement of the clusters produced by hierarchical clustering

### 1.7.13. Two ways to label clusters

* Show titles of typical documents
* show words/phrases proominent in cluster

### 1.7.14. Ways to evaluate Clustering algorithm(from best to weakest) 

* Purely quantitative measures > Ground “truth” comparison > user inspection > anecdotal

### 1.7.15. Purity and Rand Index

* Purity Measure - accuracy is measured by the number of correctly assigned documents divided by the total number of documents;
* The Rand index (RI) measures the percentage of decisions that are correct. 

## 1.8. Question Answering

### 1.8.1. What is that?

* Question Answering (QA) is concerned with building systems that matically answer questions posed by humans in a natural language. It combines information retrieval and natural language processing.
* Google Approach:
  - Original approach: find the question as a string on the web, return next sentence. Improved by introducing Knowlegde graph and N-grams

### 1.8.2. Some prouducts designed for QA

* Siri, Ask.com, IBM's Watson, Google's knowledge graph

### 1.8.3. Main phases for QA

1. question processing: Captures the semantics of the question. 
2.  Passage retrieval: Extracts and ranks passages using surface-text techniques  
3.  answer processing: Extracts and ranks answers using NL techniques

### 1.8.4. Ranking Retrieved Passages 6 criteria
1. The number of named entities of the right type in the passage
2. The number of question keywords in the passage
3. The longest exact sequence of question keywords that occurs in the passage
4. The rank of the document from which the passage was extracted
5. The proximity of the keywords from the original query to each other. 
6. The N-gram overlap between the passage and the question;

### 1.8.5. Passage ordering is performed using a sort that involves three scores:
1. The number of words from the question that are recognized in the same sequence in the window
2. The number of words that separate the most distant keywords in the window
3. The number of unmatched keywords in the window

### 1.8.6. Ranking candidate answers approaches

* Part-of-Speech Tagging , Parsing,  Named Entity Extraction, Determining Semantic Relations, Dictionaries

### 1.8.7. Microsoft AskMSR

* AskMSR is a question answering system developed at Microsoft, rather than doing sophisticated linguistic analyses it relies upon information scattered around the web

* Steps:
  1.  Query rewriting:Some query rewrites are more reliable than others
  2. Query Search Engine: Send all rewrites to a Web search engine; only rely on search engine's "snippets"
  3. Mining N-Grams: Weight of an n-gram: occurrence count, each weighted by “reliability” (weight) of
     rewrite that fetched the document
  4. Filtering N-Grams: match "data-type filters" of each question type
  5. Tiling the Answers: merged, discard old n-grams; repeat, utile no more overlap

### 1.8.8. Mean Reciprocal Rank(MMR)-- judge the quality of answers

* The mean reciprocal rank is a statistical measure for evaluating any process that produces a list of possible responses to a sample of queries, ordered by probability of correctness. 
* Formulate: MMR = Sum(1/rank i) / Q

## 1.9. Classfication

### 1.9.1. Classfication Methods

* Manual classification: Yahoo! Directory
* Using Vector Spaces: Two premise
  - Documents in the same class form a contiguous region of space(contiguity hypothesis)
  - Documents from different classes don’t overlap (much)

### 1.9.2. Relevance Feedback

* Define: User feedback on relevance of docs in initial set of results, which can be iterations

### 1.9.3. Rocchio Method is used for Relevance feedback

- Rocchio is limited to determining two classes: relevant and non-relevant documents
- Assign d to class c iff |u(c) - v(d)| < |u(c) - v(d)|  - b, assign d to class c iff the distance from d to c is less than the distance  to all other centroids, even including a small factor b 

- The centroid is the center of mass (or vector average) of a set of points.The centroid may not correspond to a document in your set.
- Rocchio chooses the centroid as the representative for each class 
- Classification Rule: Given a new document, take its vector representation and determine the nearest centroid
- Note: This method does not guarantee that classifications are consistent with the given training data
- Boundaries in  Rocchio Classification are Hyperplanes: divide any line, any plane, any higher dimensional spaces

### 1.9.4. kNN- k Nearest Neighbor Method ～ second classfication algorithm

* Distance function measurements: Euclidean(commonly used), Manhattan, Minkowski
* Other names: Case-based learning ,Memory-based learning, Lazy learning
* Non-learning step, just store the labeled training examples
* Two phases: training phase(consists only of storing the feature vectors and class labels of the training samples) 
  and classification phases(k is a user-defined constant, and an unlabeled vector (a query) is classified by assigning the label which is most frequent among the k training samples nearest to that query point.)
* Choosing the optimal value for K is best done by first inspecting the data; generally, a large k value is more precise as it reduces the overall noise; Historically, the optimal k is between 3- 10
* Two drawbacks: performance, distance metric
* No feature selection and training necessary; sacles well with large number of classes; mostly, more accurate than Rocchio
* For binary choice problems choose k odd, to avoid tied votes

### 1.9.5. Voroni Diagram

* Define: A Voronoi diagram is a partitioning of a plane into regions based on distance to points in a specific subset of the plane. 1nn

## 1.10. Ps
* Cloud computing is Internet-based computing, whereby shared resources, software and information are provided to computers and other devices ondemand, like the electricity grid.
* A hypervisor or virtual machine monitor (VMM) is computer software, firmware or hardware that creates and runs virtual machines
* What is Solr ? A full text search server based on Lucene
* What is Lucene? High performance, scalable, full-text search library;Lucene Internals - Positional Inverted Index
* Lucene does NOT include crawlers or explicit searching of documents; – Searching the index must be implemented elsewhere; 100% Java, no dependencies; Offered by the Apache Software Foundation
* Query Types Supported by Solr: Single and multi-term queries, Boost queries,, Range queries on date,Proximity Search
* What is Static Quality Scores Heuristic?
We want top-ranking documents to be both relevant and authoritative. Relevance is being modeled by cosine scores. Authority is typically a query-independent property of a document, and we may assign to each document a query-independent quality score in [0,1] to each document d. Denote this by g(d), g stands for goodness.
