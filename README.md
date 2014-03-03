Karpon
======

Karpon ([fruit] [1]) is a tool for all researchers interested of ancient religious and philosophical scriptures and their *certain* hermeneutic, or more precisely exegetical interpretation. This *certain* interpretation is mainly oriented and based on letter number values of the alphabet of the manuscript's writing system.

### Historical background

Method of seeking "hidden" multilayer meanings of the literary words by their numerical value is better known as **gematria** and **isopsephy**, which were and currently are practiced by Hebrew Cabalists and Greek Gnostics. Both words, gematria and isopsephy are language specific terms having certain contextual burden. Thus neither are the best choice for describing method of Karpon, which applies same method to several other scripts.

Similar methods are used in the past around the world at least by Arabic scholars (they call it Jum’mal), Vedantists in India (see [Katapayadi system] [2]), buddhists and many other religious schools as well. Number symbolism is ideal tool for multilevel transcription of theological ideas and mnemonic devices for religious practitioners. Method can also be applied to the old Coptic (even [Ethiopic] [3]) scriptures, which borrows a lot from Greek alphabet. In fact, you can apply method to any text, if alphabet can be transformed to the numerical values. Until better word is invented for universally describe the method, gematria and isopsephy words are used in the application.

While Karpon as an application is investigating mathematical and geometric principles of the underlying text or their structure, one should not forget the greater picture. This kind of tool is just one part of the interpretation systems and should be regarded as an addition to the textual criticism  used nowadays. *"Study of the historical and cultural backgrounds for the author, the text, the original audience, classification of the type of literary genres present in the text, and an analysis of grammatical and syntactical features in the text itself" [wiki] [4]* must still be used together with Karpon to get intelligent results. Interestingly for mathematical minds and number theorists this can sort of open an unexpected door to the minds of ancient authors behind the manuscripts without really needing to learn original language in great depths. Mathematics and geometry are still considered to be the only true universal languages in the world.

### Example calculation

Core of the application is calculation of the numerical value of the word and phrases. It is good idea to do it manually, so you can get clear idea of the method. Then you can pretty much leave this job for computers as they are made for this kind of repetitious and resource eating job. First you need to know corresponding alphabet and their numerical map. One for Greek script is:

|α = 1|β = 2|γ = 3|δ = 4|ε = 5|ϛ = 6|ζ = 7|η = 8|θ = 9|
|ι = 10|κ = 20|λ = 30|μ = 40|ν = 50|ξ = 60|ο = 70|π = 80|ϙ,Ϟ = 90|
|ρ = 100|σ,ϲ,ς = 200|τ = 300|υ = 400|φ = 500|χ = 600|ψ = 700| ω = 800|Ϡ = 900|

Then you split word to letters, see their numerical value from the map and sum values. Take the word isopsephy for example:

|ι|σ|ο|ψ|η|φ|ι|α|
|i|s|ŏ|ps|ē|ph|i|a|
|10|200|70|700|8|500|10|1|

which is 1499 in total. Same applies to phrases containing multiple words, when spaces are taken as 0.

Next thing you would like to do is to check, if there are other words or phrases giving same value or if same value can be calculated by immediate geometrical ratio. Both things are main operations of the Karpon application. You can see numerical matches from the "Revelation of John" for example:

http://www.karpon.net/?gematria_number=1449

Search engine gives 13 matches with nice occurrence of *την λυχνιαν* (the lampstand) as first item.

Numerical properties are available from number module:

http://www.karpon.net/?c=number&gematria_number=1499

In this case result page shows few interesting geometrical ratios, one being 3 dimensional object (rectangular prism, or maybe you want to see it as an altar or even sarcofag), which has sides ratio of 1:1:2. 

![rectangular prism 1499 diagonal][5]

Now if diameter between opposite corners is 1499 (or maybe you want to see it as 1500), then long side of the object is 1224, which is one of the most well known number symbols of early Christianity, numerical value of *ιχθυες* (fishes) and surprisingly *δρακων μεγας* (Big Dragon) from Revelation itself! You can also see other interesting ratios, like Pythagorean tuning and find that between numbers 1499 and 888, numerical value of *ιησους* (Jesus) is an interval of major sixth or 27th harmonic.

A lot more could be dug, but this should be enough for an example. You can make same searches to Hebrew Genesis and many other manuscripts in future. English manuscript ([Sonnets of Shakespeare] [6]) is provided in Karpon just for giving opportunity to compare and test meaningfulness (or meaninglessness!) of the results with other writing systems and arbitrary text corpuses.

So, with Karpon web application you can find occurrences of the numerical values and corresponding words/phrases 
from the manuscripts, examine their geometric connections between other terms and see harmonic properties of the numbers in tabular and visualized graphical format. Future releases of the application will have more illustrations of the statistical side of the manuscripts.

Word properties like transliteration, lemma, morphology and translation/definitions are also shown to some extend but main emphasis is on mathematical and geometric search functionality and presentation.

Good lexicons are available from many good sites, for example [Bible Study tools] [7] that you can use in combination with Karpon.

Searching for etymology of the words is a good practice. For this purpose [Etymonline] [8] is a useful site. Other massive site for wide Greek literature research is [Perseus library] [9].

## How to get involved with Karpon?

Easiest way to get hands on Karpon application is just to use dedicated site: http://www.karpon.net/

You can see [help section](http://www.karpon.net/?c=help) of the site to see more instructions how to use it.

Other way using application is to install it on your own computer. This requires some technical skills to set up web server and PHP application on localhost. Third way to interact with the project is to contribute manuscripts and alphabetical number mapping classes.


## Installing

You can install application to your local computer or remote web server. Copy application's main folder to your 
server public directory and reach it by web browser. In this case address would most likely be: 
`http://localhost/karpon/`

If you want to use other installation directory or server port, remember to change `config.php` accordingly:

`WWW_ROOT` -> `http://localhost{:port}/your_directory/`

You need to have PHP version 5.3 or higher installed on your server, but there is no need for database, because 
data and logic used on application is all file and memory based. Rich text content is maintained and retrieved from [http://karpon321.tumblr.com/](http://karpon321.tumblr.com/) via their API.

You also need to have open internet connection to run everything smoothly, because some of the javascript 
dependency is loaded from ASP.NET [CDN](http://en.wikipedia.org/wiki/Content_delivery_network).

If you install application on a remote server, set `WWW_ROOT` to your own server and path on `config.php`.


## Contributing

Contributions for the manuscripts are more than welcome. Please see developers section to see more detailed 
description and instruction how to contribute.


## Developing

Application is modular in a way that you can add your own manuscripts and alphabetic mappings to it. It's not easy 
task as you can see from the following steps, while at the same time it is the most important task before being 
able to use Karpon as a research tool for new writing systems and manuscripts.


### Adding a new script

This requires extending two classes to the `gematria.class.php` file.

a) `Gematria` class is a parent class for mapping alphabets to the corresponding numeric values. See for example 
class `Greek_Gematria`.

b) `Alphabet` class is used to present small and capital letters of the alphabet and transliteration tables. See for 
example class `Greek`.

Separation of the `Gematria` and `Alphabet` classes provides ability to use different numerical mapping for same script. 
See for example class `IvanPaninGreek_Gematria`.


### Adding a new manuscript

In addition to introducing new gematria mapping and script classes, for practical purposes you want to add a new manuscript. 
Manuscript files are pre formatted word by word arrays of data of the manuscript. Manuscript must be set on manuscripts 
directory, which is named by the manuscript or corpus. Inside manuscript directory there must be at least `index.php` file, 
which will include all necessary data. Format of the data follows these rules:

`$manuscript[{name}][{chapter}][{verse}] = array({word1}, {word2},...);`

where word is an array of information following this structure:

`array('{native_term}', '{lemma}', '{morphology}')`

so three words of the John's Revelation is given like this:

`$manuscript['rev'][1][1] = array(array('αποκαλυψις', 'G602', 'N-NSF'), array('ιησου', 'G2424', 'N-GSM'), 
array('χριστου', 'G5547', 'N-GSM'));`


### Adding a new word definitions .js file

On above example G602 refers to the Greek concordance of the root word, but can be any unique lemma id to the word definition 
in any language. Also the morphological string "N-NSF" is referring to Greek language here, but can hold any information in 
any language. Although these are optional information, it is a very good idea to provide lemma and grammar information of 
the words for more convenient studying to the manuscripts. At the moment greek and hebrew lemmas are provided but you can 
create word definitions for other languages and scripts. In that case create a file to the assets/js/ directory in format 
following this naming convention:

`assets/js/{language_name}-lemma.js`

Content of that file must follow this format:

`var word_definitions = { "word_id": { "lemma": "native word", "def": "word definition" },... }`

Finally you need to manually add new script to the `$gematria_methods` and `$installed_manuscripts` array on `init.php`.

Greek and Hebrew concordances are provided with the application. See: https://github.com/openscriptures/strongs for original files.


### Dependencies

Templating system [Haanga](https://github.com/crodas/Haanga) is provided by C. D. Rodas.

Site layout is based on [Skeleton](www.getskeleton.com) V1.2 by Dave Gamache.

Body texts are centralized to the Tumblr ecosystem instead of own database. [Tumblr PHP API](https://github.com/gregavola/tumblrPHP) library is needed for that purpose.

Charts and geometry visualization is done with [JSXGraph](https://github.com/jsxgraph/jsxgraph).

Other javascript libraries involved are [JQuery](http://jquery.com/), [Datatable](https://datatables.net/), [Highlight](http://highlightjs.org/) and [MathJax](http://www.mathjax.org/).

## Current state


### Supported scripts

1. Greek
2. Hebrew
3. Roman


### Installed manuscripts

**Textus Receptus**

- John's Revelation (Greek)

**Hebraica Stuttgartensia**

-  Genesis (Hebrew)

**William Shakespeare**

-  Sonnets (English)


## License

The MIT License ([MIT](LICENSE))

[1]: http://en.wikipedia.org/wiki/Karpos
[2]: http://en.wikipedia.org/wiki/Katapayadi_system
[3]: http://www.geez.org/Numerals/
[4]: http://en.wikipedia.org/wiki/Exegesis
[5]: http://www.karpon.net/assets/images/rectangular-prism-1499.jpg
[6]: http://www.gutenberg.org/cache/epub/1041/pg1041.txt
[7]: http://www.biblestudytools.com/lexicons/
[8]: http://etymonline.com/
[9]: http://www.perseus.tufts.edu/hopper/