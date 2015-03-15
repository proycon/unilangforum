=====================================
UniLang Language Community - Forum
=====================================

This repository contains the source code for the UniLang forum
(http://forum.unilang.org), powered by phpBB 3.1. The phpBB 3.1 source and all
custom extensions are included here.

The UniLang style resides in ``phpBB3/style/unilang/`` and inherits from the
default prosilver style.

Extensions reside in ``phpBB3/ext``.Custom-made UniLang extensions are in
``phpBB3/ext/unilang``, we have the following custom extensions, click the links for
further documentation:

 * [UniLang Languages
   Extension](https://github.com/proycon/unilangforum/tree/master/phpBB3/ext/unilang/languages) - Provides language & location functionality: flags, languages in user profiles, subforum flags, etc..
 * [UniLang Chat
   Extension](https://github.com/proycon/unilangforum/tree/master/phpBB3/ext/unilang/chat) - Trivial chat link 


If you want to write a new extension or edit an
existing one, please familiarize yourself with the phpBB3.1 extension framework:

 * [Writing Extensions](https://www.phpbb.com/extensions/writing/)
 * [Available PHP events (hooks) & Template events](https://wiki.phpbb.com/Event_List)
 * [Porting PhpBB3.0 mods to 3.1](https://github.com/nickvergessen/howto-convert-phpbb30mod-to-phpbb31ext)

Modifying the phpBB3 sources should be *strictly avoided* unless there is
absolutely no other way. Always either write proper extensions (strongly
preferred), or otherwise adapt the templates in the UniLang style (keep this
to a minimum too).



