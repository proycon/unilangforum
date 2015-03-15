========================================
UniLang Languages Extension [phpBB 3.1]
========================================

This extension contains the following, all services consist of a single class
by definition:

 - Language database (in memory), with codes, native names and english names,
   see ``includes/lang_data.php``, this is the service
   ``unilang.languages.lang_data``
 - Country and region database (in memory), with codes, native names and english names,
   see ``includes/region_data.php``, this is the service
   ``unilang.languages.region_data``
 - Functions for getting language/country names and lists, matching codes, and
   more, see ``includes/lang_functions.php``, this is the service
   ``unilang.languages.lang_functions``
 - Language & Location visualisation the user profiles, for visualisation and
   forms for editing


Notes:
 - There are no database migrations included whatsoever, the fields are assumed to already exist in the database, as is the case for UniLang
 - The UCP module has to be explicitly added in the ACP

-------
FAQ
-------

**How to add a language to the database?**

Edit ``includes/lang_data.php``:

 * Add the ISO-639-1 language code if available, otherwise use ISO-639-3. Some regional variants of languages are specified as sublanguages, like pt-BR (brazilian portuguese), de-AT (austrian german). See the next question for more on language codes.
 * Make sure to add the native language name to ``$language_names``, and the English name to ``$languages_names_en``
 * Don't change any existing language codes, there are database references to them that will suddenly get dereferenced!
 * Don't add any personal conlangs, only some larger conlangs (klingon, volapük, tokipona etc) are allowed under the 'art' parent tag. 

**What language codes do you use?**

UniLang uses a language code system  for which the basis is
[iso-639-1](http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes), when
available, and [iso-639-3](http://www-01.sil.org/iso639-3/codes.asp) in almost all other cases. In practise this means we have
two-letter language codes for the more common languages, and three letter
codes for less common languages. For example ``es`` for Spanish and ``zap`` for
Zapotec.

We do deviate from iso-639-3 when it comes to dialects and regional and
scriptural variants of languages. We implement a systems loosely based on
[RFC4646](http://www.ietf.org/rfc/rfc4646.txt). Regional variants are
implemented by appending a hyphen and the
[iso-3166](http://en.wikipedia.org/wiki/ISO_3166) country code, or a
iso-3166-2 region code (if available) to the base-language code. We thus get
``es-MX`` for Mexican Spanish. Scriptural variants are implement by appending a
period and a script code to the base language code. We for example get zh.Hans
for Mandarin Chinese in simplified script and ``zh.Hant`` for Mandarin Chinese in
traditional script. We call this appended part (including the hyphen or period)
the complex-language part. If such a complex language part is defined, then the
base language code by itself would refer to a group of all of them, like ``zh``, or
sometimes there is an implicit preference , like ``es`` for Spanish for Spain, ``fr``
French from France.

Two special base-languages codes are defined: ``art`` for artificial languages,
and ``sgn`` for sign languages. An overview of all currently available language codes can be
found at our Language List Information page. 

**How to associate a subforum with a flag?**

Associate one or more language codes with the forum ID, use
``$forum_bylanguage``, multiple language codes may exist for a single forum.





