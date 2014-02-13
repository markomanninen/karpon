Karpon
======

Karpon (*[fruit](http://en.wikipedia.org/wiki/Karpos)*) is a research tool for ancient scriptures 
based on letter number values of the alphabet of the manuscript's writing system.

This method of seeking "hidden" double meanings of the literary words is better known as **gematria** 
and **isopsephy**, which were and still are practiced by Hebrew Cabalists and Greek Gnostics.

With Karpon web application you can find occurrences of the numerical values and corresponding words/phrases 
from the manuscripts, examine their geometric connections between other terms and see number properties 
in table format. Word properties like transliteration, lemma, morphology and translation/definitions are also 
shown to some extend but main emphasis is on mathematical and geometric search functionality and presentation 
since good lexicons are available on sites like: http://www.biblestudytools.com/lexicons/

Easiest way to use Karpon application is to use dedicated site: http://www.karpon.net/

You can see [help section](http://www.karpon.net/?c=help) of the site to see more instructions for using it. Other 
way using application is to install it on your own computer. This requires some technical skills to set up web 
server and PHP application on localhost. Third way to interact with the project is to contribute manuscripts and 
alphabetical number mapping classes.


## Installing

You can install application to your local computer or remote web server. Copy application's main folder to your 
server public directory and reach it by web browser. In this case address would most likely be: 
`http://localhost/karpon/`

If you want to use other installation directory or server port, remember to change `config.php` accordingly:

`WWW_ROOT` -> `http://localhost{:port}/your_directory/`

You need to have PHP version 5.3 or higher installed on your server, but there is no need for database, because 
data and logic used on application is all file and memory based.

You also need to have open internet connection to run everything smoothly, because some of the javascript 
dependency is loaded from ASP.NET [CDN](http://en.wikipedia.org/wiki/Content_delivery_network).

If you install application on remote server, set `IS_LOCAL` to `FALSE` on `config.php`.


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


## Current state


### Supported scripts

1. Greek
2. Hebrew
3. Roman


### Installed manuscripts

Textus Receptus

- John's Revelation (Greek)

Hebraica Stuttgartensia

-  Genesis (Hebrew)

William Shakespeare

-  Sonnets (English)


## License

The MIT License ([MIT](LICENSE))