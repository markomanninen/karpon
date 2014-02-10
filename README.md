Karpon
======

Karpon (meaning  [fruit](http://en.wikipedia.org/wiki/Karpos)) is a research tool for ancient scriptures 
based on letter number values of the alphabet of their script / writing system.

This method of seeking hidden double meanings of the literary words is better known as *gematria* 
and *isopsephy*, which were and are practiced mostly by hebrew cabalists and greek gnostics.

With Karpon web application you can find occurences of the numerical values and corresponding words/phrases 
from the manuscripts, examine their geometric connections between other terms and see number properties in table 
format. Word properties like transliteration, lemma, morphology, translation and such are also shown to some extend
but main emphasis is on mathematical and geometric search functionality and presentation.

See application in action: http://www.karpon.net


## Installing

You can install application to your local computer or remote web server. Copy application's main folder
to your server public directory and reach it by web browser, for example: http://localhost/karpon/

You need to have PHP version 5.3 or higher, but there is no need for database, because data and logic 
used on appliation is all file and memory based.

You also need to have open internet connection to run everything smoothly, because some of the javascript dependency 
is loaded from [CDN](http://en.wikipedia.org/wiki/Content_delivery_network).


## Contributing

Contributions for the manuscripts are more than welcome. Please see developers section to see more detailed 
description and instruction how to contribute.


## Developing

Application is modular in a way that you can add your own manuscripts and alphabetic mappings to it.

Currently supported scripts are:

1. Latin
2. Greek
3. Hebrew

Manuscripts installed on application currently are:

Textus Receptus

- John's Revelation

More instruction are coming soon...
