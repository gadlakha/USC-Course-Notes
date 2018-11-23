

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

  –Automatic parallelization of code & distribution across multiple processors

  –Fault tolerance in the event of failure of one or more nodes

  –I/O scheduling

  –Monitoring & Status updates

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

### The Map/Reduce Paradigm

​	1.A large number of records are broken into segments

​	2.Map function: extract something of interest from each segment

​	3.Group and sort intermediate results from each segment

​	4.Reduce function: aggregate intermediate results

​	5.Generate final output

**Key idea:** to re-phrase problems in such a way that the input can be divided into parts and operated on in parallel and the results combined to produce  a solution to the original problem

### Fault Tolerance  in MapReduce

1. If a task crashes:

   –Retry on another node

   * OK for a map because it had no dependencies

   * OK for reduce because map outputs are on disk

   – If the same task repeatedly fails, fail the job or ignore that input block

2. If a node crashes:

   –Relaunch its current tasks on other nodes

   –Relaunch any maps the node previously ran

   * Necessary because their output files were lost along with the crashed node

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

  * dayparting is a technique that involves increasing your bids during times when conversion rates are typically above average, and decreasing them when rates are typically below average????

  ### Google AdWords  Auction Rules

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
* Adsense Content Matching Originally Based on WordNet(WordNet is a semantic lexicon for the English language)

### Ad exchange

* An ad exchange is a technology platform that facilitates the buying and selling of media advertising inventory from
  multiple ad networks.

### Web beacons

* Web beacons are small strings of HTML code that are placed in a Web page. They are sometimes called “clear GIFs”, pixel tags, web bugs, or tracking bugs . Web beacons are most often used in conjunction with cookies

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

### Edit Distance & Levenshtein Algorithm

* Edit Distance: the minimum edit distance between two strings is the minimum number of editing operations (insertion,deletion,substitution) needed to transform one into the other

* Levenshtein Algorithm: DP, time--O(mn), space--O(nm), Backtrace--O(n+m)
* Weighted Edit Distance: why? –spell correction: some letters are more likely to be mistyped than others



