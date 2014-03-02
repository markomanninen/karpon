Karpon
======

Karpon (*[fruit](http://en.wikipedia.org/wiki/Karpos)*) is a research tool for all users interested of ancient religious and philosophical scriptures and their *certain* hermeneutic, or more precisely exegetical interpretation. This *certain* interpretation is mainly oriented and based on letter number values of the alphabet of the manuscript's writing system.

While Karpon as an application is investigating mathematical and geometric principles of the underlying text or their structure, one should not forget the greater picture. This kind of tool is just one part of the interpretation systems and should be regarded as an addition to the textual criticism  used nowadays. Study of the historical and cultural backgrounds for the author, the text, the original audience, classification of the type of literary genres present in the text, and an analysis of grammatical and syntactical features in the text itself[1](http://en.wikipedia.org/wiki/Exegesis) must still be used together with Karpon to get intelligent results. Interestingly for mathematical minds and number theorists this can sort of open an unexpected door to the minds of ancient authors behind the manuscripts without really needing to learn original language in great depths. Mathematics and geometry are still considered to be the only true universal languages in the world.

### Historical background

Method of seeking "hidden" double meanings of the literary words by their numerical value is better known as **gematria** and **isopsephy**, which were and currently are practiced by Hebrew Cabalists and Greek Gnostics. Both words, gematria and isopsephy are language specific terms having certain contextual burden. Thus neither are the best choice for describing method of Karpon, which applies same method to several other scripts. Similar methods are used in the past at least by Arabic scholars (they call it Jum’mal), Vedantists in India (see [Katapayadi system](http://en.wikipedia.org/wiki/Katapayadi_system)), maybe buddhists and many other religious schools as well. Number symbolism is ideal tool for multilevel transcription of theological ideas and mnemonic devices for religious practitioners. Method can also be applied to the old Coptic (and even [Ethiopic](http://www.geez.org/Numerals/)) scriptures, which borrows a lot from Greek alphabet. In fact, you can apply method to any text, if alphabet can be transformed to the numerical values. English example (Sonnets of Shakespeare) is given in Karpon just for giving opportunity to compare and test the meaningfulness (or meaninglessness!) of the results. But until better word is invented for universally describe the method, gematria or isopsephy words are used in the application.

### Example

...

With Karpon web application you can find occurrences of the numerical values and corresponding words/phrases 
from the manuscripts, examine their geometric connections between other terms and see harmonic properties of the numbers in tabular and visualized graphical format. Word properties like transliteration, lemma, morphology and translation/definitions are also shown to some extend but main emphasis is on mathematical and geometric search functionality and presentation. Good lexicons are available from many good sites, for example: http://www.biblestudytools.com/lexicons/ that you can use in combination with Karpon.

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