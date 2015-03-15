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






