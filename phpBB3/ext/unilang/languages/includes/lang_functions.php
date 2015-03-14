<?php
/** 
*
* @package unilang
* @name Language functions and definitions
* @copyright (c) 2007-2015 UniLang
* @author proycon
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

require_once($phpbb_root_path . 'ext/unilang/languages/includes/lang_data.php');
require_once($phpbb_root_path . 'ext/unilang/languages/includes/region_data.php');

namespace unilang\languages\includes;

/**
* Compare two language codes and return whether they match (can be unified) or not. If strict is false, they will match when they have the same base-language, despite being different script/regional variants, it strict is true, all that is specified has to match. Example, under strict mode: es-ES and es-AR don't match, whilst under non-strict mode, they do. 'es-ES' against 'es' (or vice versa) will match in either mode.
*
*@return bool
*/
function compare_lang($lang1,$lang2,$strict = true) {
	if ($lang1 == $lang2) return true; //if we have a clear match we're gonna do no fancy stuff
	if (($lang1 == 'all') || ($lang2 == 'all')) return true;
	if (substr($lang1,0,2) != substr($lang2,0,2)) return false; //First two characters don't even match, so no need for fancy stuff as it won't match anyhow
	//Do fancy matching stuff:
	list($baselang1,$script1,$region1) = split_language_code($lang1,false);		
	list($baselang2,$script2,$region2) = split_language_code($lang2,false);
	if (!$strict) {
		return ($baselang1 == $baselang2);
	} else {
		if ($baselang1 != $baselang2) return false;
		if (($script1) && ($script2) && ($script1 != $script2)) return false;
		if (($region1) && ($region2) && ($region1 != $region2)) return false;
		return true;
	}
}


/**
* Splits a given language code into its components. A base language, a script, a region.
* Note that this only returns what is explicitly specified in the code, if you want to know what script goes with a language implicitly, use get_language_script($lang).
*
* @param $simple Boolean indicating if we are in simple mode (default) or not, in which only a 2-tuple will be returned.
* @return array($baselang,$complexlang) in simple mode, array($baselang,$script,$region) otherwise
*/
function split_language_code($lang, $simple = true) {
	if ((empty($lang)) || (!is_string($lang))) throw new Exception("Language code specified is empty or no string!");
	$l = strlen($lang);
	$baselang = '';
	$script = false;
	$region = false;
	$temporal = false;
	$mode = 1; //1 = base, 2 = script, 3 = region (dialect), 4 = temporal ; 
	for ($i = 0; $i < $l; $i++) {
		$c = $lang{$i};
		if ($c == '.') {
			$mode = 2;
		} elseif ($c == '-') {
			$mode = 3;
		} elseif ($c == '_') {
			$mode = 4;
		} else {
			if ($mode == 1) {
				$baselang .= $c;
			} elseif ($mode == 2) {
				$script .= $c;
			} elseif ($mode == 3) {
				$region .= $c;
			} elseif ($mode == 4) {
				$temporal .= $c;
			}
		}
	}
	if ($simple) {
		if (($script) && ($region)) {
			return array($baselang,'-'.$region.'.'.$script);
		} elseif ($region) {
			return array($baselang,'-'.$region);
		} elseif ($script) {
			return array($baselang,'.'.$script);
		} elseif ($temporal) {
			return array($baselang,'_'.$temporal); //TODO: allow for combinations with temporal
		} else {
			return array($baselang,false);
		}
	} else {
		return array($baselang,$script,$region,$temporal);
	}
}

/**
* Create a language code out of its three parts. (If you have only baselang and complexlang, just concatenate them, then there's no need for this function)
* @return string
*/
function combine_language_code($baselang,$script = '',$region = '') {
 $lang = $baselang;
 if ($region) {
  if ($region{0} != '-') $lang .= '-';
  $lang .= $region;
 }
 if ($script) {
  if ($script{0} != '.') $lang .= '.';
  $lang .= $script;
 }
 return $lang;
}


/**
* Checks if a language code is complex (with regional/script part), or simple (base-language only)
* @return bool
*/
function lang_complex($lang) {
	return (strlen($lang) > 3);
}


/**
* Returns an xhtml img tag (string) holding a language icon (flag) for the given language code. 
*
* @param $lang A language code (simple or complex). If $lang is a complex code, an extra check will be done to see if there is a complex flag, otherwise it will fall back to the baselanguage
* @param $args An associative array (or plain string) of optional arguments for the img tag
* @param $absolute Return an absolute URL, no  IMG tag
* @param $name A name that will be used as alt and tooltip text (defaults to the name of the language)
* @return string
*/
function langicon($lang, $args = false,$absolute = false, $name = '') {
	global $phpbb_root_path;
	$ext = 'png';
	if (lang_complex($lang)) {
		if (file_exists($phpbb_root_path ."ext/unilang/languages/styles/all/images/langicons/$lang.$ext")) {
			$imgsrc ="images/langicons/$lang.$ext";
		} else {
			list($lang,$script,$region) = split_language_code($lang,false);
			$region = strtoupper($region);
			if (file_exists($phpbb_root_path ."ext/unilang/languages/styles/all/images/countryicons/$region.$ext")) { 
				$imgsrc = "ext/unilang/languages/styles/all/images/countryicons/$region.$ext";
			} else {
				$imgsrc = "images/langicons/$lang.$ext";
			}
		}
	} else {
		$imgsrc = "images/langicons/$lang.$ext";
	}
	$extra = '';
	if (is_array($args)) {
		foreach ($args as $key => $value) {
			$extra .= " $key=\"$value\"";
		}
		$extra .= ' ';
	} elseif ($args === false) {
		$extra = "$args ";
	}
	$name = get_language_name($lang);
	if (file_exists($phpbb_root_path . $imgsrc)) { 
		if ($absolute) {
			return "http://".$_SERVER['HTTP_HOST'] . "/" . $imgsrc;
		} elseif ($lang != 'ne') {
			return "<img src=\"http://".$_SERVER['HTTP_HOST']."/$imgsrc\" alt=\"$name\" style=\"border:1px solid #CCC\" title=\"$name\" $extra/>";
		} else {
			return "<img src=\"http://".$_SERVER['HTTP_HOST']."/$imgsrc\" alt=\"$name\" title=\"$name\" $extra/>";		
		}
	} else {
		if ($absolute) {
			return  "http://".$_SERVER['HTTP_HOST']."/images/langicons/noflag.gif";
		} else {
			return "<img src=\"http://".$_SERVER['HTTP_HOST']."/images/langicons/noflag.gif\"  alt=\"$name\" title=\"$name\" $extra/>";		
		}
	}
}




function get_language_codes() {
	/* An alias preventing the need for the global variable */
	global $language_codes;
	return $language_codes;
}

/**
* Returns the preferred languages, as set in browser, only returns known languages defined in $language_codes 
* @return string
*/
function get_browser_languages() {

	global $language_codes;
	$rawlangs = explode(',',@$_SERVER['HTTP_ACCEPT_LANGUAGE']);

	$langs = array();
	foreach ($rawlangs as $browser_lang) {
		list($browser_lang) = explode(';',$browser_lang);
		$found = false;
		foreach ($language_codes as $lang) {
			if (strtolower($lang) == strtolower($browser_lang)) {
				$langs[] = $lang;
				$found = true;
				break;
			} elseif (strtolower($lang) .'-' == strtolower(substr($browser_lang,0,strlen($lang))) . '-') {
				$found = $lang;
			}
		}	
		if (($found !== false) && ($found !== true)) $langs[] = $found;
	}
	return array_unique($langs);
}

/** 
* Get the full name for the specified language
*
* @param $lang The language code to get the name for
* @param $sourcelang The language in which the name is retrieved, set to false to retrieve in native language
* @param $addnative Boolean indicating whether to append the native language to the returned name, only has an effect if $sourcelang != false, returns for example: "German (Deutsch)"
* @return string
*/
function get_language_name($lang,$sourcelang = 'en',$addnative = true) {
	global $language_names, $language_names_en;
	if (!$lang) return '';
	list($baselang,$script,$region,$temporal) = split_language_code($lang,false);
	if ($sourcelang == false) {
		if (isset($language_names[$baselang])) {
			if (is_array($language_names[$baselang])) {
				if ($temporal) {
					return $language_names[$baselang]["_$temporal"];
				} elseif (($script) && ($region) && (isset($language_names[$baselang][".$script-$region"]))) {
					return $language_names[$baselang][".$script-$region"];
				} elseif (($script) && ($region) && (isset($language_names[$baselang]["-$region.$script"]))) {
					return $language_names[$baselang]["-$region.$script"];
				} elseif (($script) && (isset($language_names[$baselang][".$script"]))) {
					return $language_names[$baselang][".$script"];
				} elseif (($region) && (isset($language_names[$baselang]["-$region"]))) {
					return $language_names[$baselang]["-$region"];
				} else {
					list($firstkey) = array_keys($language_names[$baselang]);
					return $language_names[$baselang][$firstkey];
				}
			} else {
				return $language_names[$baselang];
			}
		} else {
			return $lang;
		}
	} else {
		if (isset($GLOBALS["language_names_$lang"])) {
			$loc_language_names = $GLOBALS["language_names_$lang"];
		} else {
			//fallback to english if no localization is available
			$loc_language_names = &$language_names_en;
		}
		if ($addnative) {
		 $extra = ' ('.get_language_name($lang,false).')';
		} else {
		 $extra = '';
		}
		if (isset($loc_language_names[$baselang])) {
			if (is_array($loc_language_names[$baselang])) {
				if ($temporal) {
					return $loc_language_names[$baselang]["_$temporal"];
				} elseif (($script) && ($region) && (isset($loc_language_names[$baselang][".$script-$region"]))) {
					if ($extra != ' ('.$loc_language_names[$baselang][".$script-$region"].')') {
						return $loc_language_names[$baselang][".$script-$region"].$extra;
					} else {
						return $loc_language_names[$baselang][".$script-$region"];
					}
				} elseif (($script) && ($region) && (isset($language_names[$baselang]["-$region.$script"]))) {
					if ($extra != ' ('.$loc_language_names[$baselang]["-$region.$script"].')') {
						return $loc_language_names[$baselang]["-$region.$script"].$extra;
					} else {
						return $loc_language_names[$baselang]["-$region.$script"];
					}
				} elseif (($script) && (isset($language_names[$baselang][".$script"]))) {
					if ($extra != ' ('.$loc_language_names[$baselang][".$script"].')') {
						return $loc_language_names[$baselang][".$script"].$extra;
					} else {
						return $loc_language_names[$baselang][".$script"];
					}
				} elseif (($region) && (isset($language_names[$baselang]["-$region"]))) {
					if ($extra != ' ('.$loc_language_names[$baselang]["-$region"].')') {
						return $loc_language_names[$baselang]["-$region"].$extra;
					} else {
						return $loc_language_names[$baselang]["-$region"];
					}
				} else {
					list($firstkey) = array_keys($loc_language_names[$baselang]);
					if ($extra != ' ('.$loc_language_names[$baselang][$firstkey].')') {
						return $loc_language_names[$baselang][$firstkey].$extra;
					} else {
						return $loc_language_names[$baselang][$firstkey];
					}
				}
			} else {
				if ($extra != ' ('.$loc_language_names[$baselang].')') {
					return $loc_language_names[$baselang].$extra;
				} else {
					return $loc_language_names[$baselang];
				}
			}
		} else {
			return $lang.$extra;
		}
		
	}
}


/** 
* Get the full name for the specified country
*
* @param $lang The country code to get the name for
* @param $sourcelang The language in which the name is retrieved, set to false to retrieve in native language
* @param $addnative Boolean indicating whether to append the native language to the returned name, only has an effect if $sourcelang != false, returns for example: "Germany (Deutschland)"
* @return string
*/
function get_country_name($country,$sourcelang = 'en',$addnative = true) {
	global $country_names, $country_names_en;
	$country = strtoupper($country);
	if ($sourcelang == false) {
		if (isset($country_names[$country])) {
			return $country_names[$country];
		} else {
			return $country;
		}
	} else {
		if (isset($GLOBALS["country_names_$sourcelang"])) {
			$loc_country_names = $GLOBALS["country_names_$sourcelang"];
		} else {
			//fallback to english if no localization is available
			$loc_country_names = &$country_names_en;
		}
		if ($addnative) $locname = get_country_name($country,false);
		if (isset($loc_country_names[$country])) {
			if ((!empty($locname)) && ($locname != $country) && ($loc_country_names[$country] != $locname)) {
				return $loc_country_names[$country].' ('.$locname.')';
			} else {
				return $loc_country_names[$country];
			}
		} else {
			if (isset($locname)) {
				return $locname;
			} else {
				return $country;
			}
		}
	}
}


/** 
* Returns a script code for a given language, may return an array if the language is written in multiple scripts! If a script is already provided in the language-code, it will return that.
* @return string
*/
function get_language_script($lang) {
	global $language_scripts;
	list($baselang,$script,$region) = split_language_code($lang,false);
	if ($script) return $script;
	if (isset($language_scripts[$baselang])) {
		return $language_scripts[$baselang];
	} else {
		return 'Latn';
	}
}
/**
* Returns the script name for a given script code. Returns false if no such name exists.
* @return string|false
*/
function get_script_name($script) {
	global $script_codes;
	if (@isset($script_codes[$script])) {
		if (is_array($script_codes[$script])) {
			return $script_codes[$script][0];
		} else {
			return $script_codes[$script];
		}
	}
	return false;
}


/** 
* Checks if a particular script is written from right-to-left
*
* @return bool
*/
function script_rtl($script) {
	global $script_codes;
	if (is_array($script)) list($script) = $script; //grab the first script if an array is given
	if (isset($script_codes[$script])) {
		if ((is_array($script_codes[$script])) && (in_array(LANG_SCRIPTPROP_RTL,$script_codes[$script]))) {
			return true;
		} else {
			return false;
		}
	} else {
		trigger_error("No such script exists: '$script'. Check case (Xxxx)?");
	}
}




/**
* Generates a list of languages (xhtml OPTION elements)
* @param $sourcelang   The source language to render the codes in, if set to false (default) or there are no translations for that language, it will fall back to english, you usually want to set this to what get_language() returns
* @param $langs  	An array of languages to show, if set to false (default), all languages will be shown
* @param $selected	Which of the languages is selected?
* @param $macro_selectable	Boolean indicating whether macro-languages are selectable, set to true by default, for situations in which you specify a language for resource creation, you most likely want this to be false
* @return string
*/
function langlist($sourcelang = false, $langs = false,$selected = false, $macro_selectable = true, $show_langicons = true) {
	global $language_names, $language_names_en, $user;
	
	$firefox = (strstr($_SERVER['HTTP_USER_AGENT'],"Gecko") !== FALSE);

	if (isset($GLOBALS["language_names_$sourcelang"])) {
		$names = &$GLOBALS["language_names_$sourcelang"];
	} else {
		//fallback to english if no localization is available
		$names = &$language_names_en;
	}

	$r = '';
	$prerender_content = array(); //prerender content
	$prerendered = array(); //list of pre-rendered languages (based on user profile)
	if ((isset($user)) && ($user->data['user_id'] > 1)) {
		$member_languages = get_member_languages($user->data['user_id']);
		foreach ($member_languages as $langitem) {
			if ((!$langs) || (in_array($langitem['baselang'],$langs))) {
				$extra = '';
				if ($langitem['complexlang']) {
					$code = $langitem['baselang'].$langitem['complexlang'];
					$native = $language_names[$langitem['baselang']][$langitem['complexlang']];
					$local = $names[$langitem['baselang']][$langitem['complexlang']];
					
				} else {
					$code = $langitem['baselang'];
					$native = $language_names[$langitem['baselang']];
					if (is_array($native)) { reset($native); $native = current($native); }
					$local = $names[$langitem['baselang']];
					if (is_array($local)) { reset($local); $local = current($local); }
					
				}
				if ($selected == $code) $extra = " selected=\"selected\"";
				if ($local != $native) {
					$s = "$local ($native)";
				} else {
					$s = $local;
				}
				if ($show_langicons) {
					$class = ' class="ll-'.str_replace(".","-",$code).' ll-left"';
				} else {
					$class = "";
				}
				if (! ((!$macro_selectable) && (macro_language($code)))) {
					$prerender_content[$s] = "<option$class value=\"$code\"$extra>$s</option>";
					$prerendered[] = $code;
				}
			}
		}
		ksort($prerender_content);
		$r .= implode("",$prerender_content);
		/*if (count($prerendered) > 0) {
			$r .= "<option disabled=\"disabled\" value=\"".$code."\">-----------</option>";	
		}*/
		$r = '<optgroup label="'.out('mylangs').'">'.$r.'</optgroup><optgroup label="'.out('alllangs').'">';
	}







	foreach ($names as $baselang => $value) {
 	    if (($langs == false) || (in_array($baselang,$langs))) {
		if (is_array($value)) {
			foreach ($value as $complexlang => $v) {
				if (!$complexlang) {
					if (isset($language_names[$baselang]) && (($langs == false) || (!in_array($baselang,$prerendered)))) {
						//element goes on parent level
						$native = $language_names[$baselang];
						if (is_array($native)) { reset($native); $native = current($native); }
						$extra = $disabled = "";
						if (($native != '') && ($native != $v)) {
							$native = ' ('.$native.')';
						} else {
							$native = "";
						}
						if ((!$macro_selectable) && (macro_language($baselang))) {
							$disabled = " disabled=\"$disabled\"";
						} else {
							if ($selected == $baselang) $extra = " selected=\"selected\"";
						}
						if ($show_langicons) {
							$class = " class=\"ll-$baselang\"";
						} else {
							$class = "";
						}
						$r .= "<option$disabled$class value=\"$baselang\"$extra>".$v.$native."</option>";
					}
				} else {
					if (isset($language_names[$baselang][$complexlang]) && (($langs === false) || (!in_array($baselang.$complexlang,$prerendered)))) {
						$native = $language_names[$baselang][$complexlang];
						if (($native != '') && ($native != $v)) {
							$native = ' ('.$native.')';
						} else {
							$native = '';
						}		
						if ($selected == $baselang.$complexlang) {
							$extra = " selected=\"selected\"";
						} else {
							$extra = '';
						}
						if ($show_langicons) {
							$class = ' class="ll-'.str_replace(".","-",$baselang.$complexlang).'"';
						} else {
							$class = " style=\"padding-left: 20px;\"";
						}
						$r .= "<option$class value=\"$baselang$complexlang\"$extra>";
						if ((!$firefox) || (!$show_langicons)) $r .= " --- ";
						$r .= $v.$native."</option>";	
					}						
				}
			}
		} else {
			if (isset($language_names[$baselang]) && (($langs === false) || (!in_array($baselang,$prerendered)))) {
				$native = $language_names[$baselang];
				if (is_array($native)) { reset($native); $native = current($native); }
				if (($native != '') && ($native != $value)) {
					$native = ' ('.$native.')';
				} else {
					$native = '';
				}		
				if ($selected == $baselang) {
					$extra = " selected=\"selected\"";
				} else {
					$extra = '';
				}
				if ($show_langicons) {
					$class = " class=\"ll-$baselang\"";
				} else {
					$class = "";
				}
				$r .= "<option$class value=\"$baselang\"$extra>".$value.$native."</option>";
			}
		}
	    }
	}
	if ((isset($user)) && ($user->data['user_id'] > 1)) {
		$r .= "</optgroup>";
	}
	return $r;
}


/**
* Generates a list of countries (xhtml OPTION elements)
* @return string
*/
function countrylist($sourcelang = false, $countries = false,$selected = false,$allownone = true) {
	global $country_names, $country_names_en;
	if (isset($GLOBALS["country_names_$sourcelang"])) {
		$names = &$GLOBALS["country_names_$sourcelang"];
	} else {
		//fallback to english if no localization is available
		$names = &$country_names_en;
	}
	$r = '';
	if ($allownone) $r .= "<option value=\"\">(".out('no_selection').")</option>";
	foreach ($names as $country => $loc_name) {
 	    if (($countries == false) || (in_array($country,$countries))) {
			if (isset($country_names[$country])) {
				$native = $country_names[$country];
				if (is_array($native)) { reset($native); $native = current($native); }
				if (($native != '') && ($native != $loc_name)) {
					$native = ' ('.$native.')';
				} else {
					$native = '';
				}		
				if ($selected == $country) {
					$extra = " selected=\"selected\"";
				} else {
					$extra = '';
				}
				$r .= "<option value=\"$country\"$extra>".$loc_name.$native."</option>";
			}
	    }
	}
	return $r;
}

/**
* Returns a list of regions (xhtml OPTION elements) for a specified country.
*/
function regionlist($country, $selected = false, $dummy = true) {
	global $region_data;
	$country = strtoupper($country);
	$r = '';
	if (isset($region_data[$country])) {
		foreach ($region_data[$country] as $code => $name) {
			if ($selected == $code) {
				$extra = 'selected="selected"';
			} else {
				$extra = '';
			}
			$r .= "<option value=\"$code\" $extra>$name</option>";
		}
	}
	if ($dummy) {
		if ($r == '') {
			return '<option value="">(no regions available)</option>';
		} else {
			return '<option value="">(no region specified)</option>'.$r;
		}
	} else {
		return $r;
	}
}




/*
* Return true if the language code is a macro-code that should be further specified and not used as such for 
* identifying resources etc
*/
function macro_language($lang) {
	global $language_names;
	list($baselang, $complexlang) = split_language_code($lang); 
	if ($complexlang) return false;//if we have a complexlang component, we can't be a macro-language by definition
	if (!isset($language_names[$baselang])) return false; //trigger_error("macro_language(): Language does not exist: $lang", E_USER_ERROR);
	if (!is_array($language_names[$baselang])) {
		return false;
	} else {
		reset($language_names[$baselang]);
		$key = key($language_names[$baselang]);
		if ($key) { 
			return true; 
		} else { //we have a zero/empty key, so we don't have a macro-language
			return false;
		}
	}
}


/**
* Returns a forum URL based on a language, or false if no related forum exists
*
* @param $idonly Return only the forum Id, not the full URL
* @return string|false
*/
function forum_bylanguage($lang, $idonly = false) {
	global $forum_viewforum, $forum_bylanguage;
	if (isset($forum_bylanguage[$lang])) {
		if ($idonly) {
			return $forum_bylanguage[$lang];
		} else {
			return $forum_viewforum . $forum_bylanguage[$lang];
		}
	} else {
		return false;
	}
}

/**
* Returns a URL to a chat channel based on a language, or false if no related forum exists
*
* @param $channelonly Return only the channel, not the full URL
* @return string
*/
function chat_bylanguage($lang, $channelonly = false) {
	global $chat_channel, $chat_bylanguage;
	if (isset($chat_bylanguage[$lang])) {
		if ($channelonly) {
			return $chat_bylanguage[$lang];
		} else {
			return $chat_channel . $lang;
		}
	} else {
		return false;
	}
}


function unilang_to_iso639_3($lang) {
	global $conv_to_iso639_3;
	list($baselang,$script,$region) = split_language($lang,false);
	if (isset($conv_to_iso639_3[$baselang.'-'.$region])) {
		return $conv_to_iso639_3[$baselang.'-'.$region];
	} elseif (isset($conv_to_iso639_3[$baselang])) {
		return $conv_to_iso639_3[$baselang];
	} elseif (strlen($baselang) == 3) {
		return $baselang;
	}
	return false;
}

function iso639_3_to_unilang($lang) {
	global $conv_to_iso639_3;
	foreach ($conv_to_iso639_3 as $unilang => $iso) {
		if ($iso == $lang) return $unilang;
	}
	return false;
}



define('LANG_NATIVE',5);
define('LANG_FLUENT',4);
define('LANG_ADVANCED',3);
define('LANG_INTERMEDIATE',2);
define('LANG_BEGINNER',1);
define('LANG_INTEREST',0); //interested in learning


/*
* Queries which languages are spoken by a particular user.
* Will return an array of arrays with the following four elements:
* - base-language
* - complex-language
* - proficiency (one of the LANG_* constants)
* - canhelp (boolean)
* - wanthelp (boolean)
* The function has a caching mechanism if called with the user_id of the current logged in user, so you can safely call it over and over again.
*
* @param $user_id The user ID. Either one ID, or an array of multiple IDs, in which case the returned output will be an associative array with the user_id as key.
*/
function get_member_languages($user_id, $table = 'member_lang') {
	global $db, $member_languages_cache, $user;
	if (isset($user) && ($user->data['user_id'] == $user_id) && (isset($member_languages_cache))) return $member_languages_cache; //we cache data for the current logged-in user
	$languages = array();
	if (is_array($user_id)) {
		$ids = array();	
		foreach ($user_id as $id) {
			$ids[] = "`user_id`='$id'";
		}
		$ids = implode(' OR ',$ids);
		$sql = "SELECT user_id,baselang,complexlang,proficiency,canhelp,wanthelp FROM $table WHERE $ids ORDER BY proficiency DESC";
	} else {
		$sql = "SELECT user_id,baselang,complexlang,proficiency,canhelp,wanthelp FROM $table WHERE `user_id`='$user_id' ORDER BY proficiency DESC";
	}
	$result = $db->sql_query($sql);
	if ($result) {
		while ($row = $db->sql_fetchrow($result)) {
			if (is_array($user_id)) {
				if (!isset($languages[$row['user_id']])) {
					$languages[$row['user_id']] = array($row);
				} else {
					$languages[$row['user_id']][] = $row;
				}
			} else {
				$languages[] = $row;
			}
		}
	}
	if (isset($user) && ($user->data['user_id'] == $user_id) && (!isset($member_languages_cache))) {
		$member_languages_cache = $languages; //we cache data for the current logged-in user
	}
	return $languages;
}

/*
* Returns a list of members that speak the requested language
*
* @param $exactproficiency Boolean stating if the proficiency has to be matched exactly (true), or if the proficiency specified is a minimal required proficiency (false) 

SELECT facebook_uid FROM `member_facebook` JOIN member_lang ON member_lang.user_id=member_facebook.unilang_uid WHERE member_lang.baselang='fr'

*/
function get_language_members($baselang = false,$complexlang = false,$proficiency = false, $canhelp = 0,$wanthelp = 0, $exactproficiency = true, $uidlist = false,  $facebook = false, $table = 'member_lang') {
	global $db;
	$query = array();
	if ($baselang) {
		$query[] = $table . ".baselang='$baselang'";
	}
	if ($complexlang) {
		$query[] = $table . ".complexlang='$complexlang'";
	}
	if ($proficiency !== false) {
		if ($exactproficiency) {
			$query[] = $table . ".proficiency='$proficiency'";
		} else {
			$query[] = $table . ".proficiency >= $proficiency";
		}
	}
	$limit = " LIMIT 50";
	if ($uidlist !== false) {
		$subquery = array();
		foreach ($uidlist as $uid) {
			if (($facebook) && ($table == 'member_lang')) {
				$subquery[] = "member_facebook.facebook_uid=".$uid;
			} else {
				$subquery[] = "$table.user_id=$uid";
			}
		}
		$query[] = '(.'.implode(' OR ',$subquery).')';
		$limit = '';
	}
	if ($canhelp !== 0) {
			$query[] = $table . ".canhelp='$canhelp'";
	}
	if ($wanthelp !== 0) {
			$query[] = $table . ".wanthelp='$wanthelp'";
	}
	if (count($query) > 0) {
		$query = implode(' AND ',$query);
		if (($facebook) && ($table == 'member_lang')) {
			$result = $db->sql_query("SELECT facebook_uid, member_lang.baselang, member_lang.complexlang, member_lang.proficiency, member_lang.canhelp,member_lang.wanthelp FROM member_facebook JOIN member_lang ON member_lang.user_id=member_facebook.unilang_uid WHERE $query ORDER BY member_lang.proficiency DESC,member_lang.canhelp DESC $limit ");
		} else {
			$result = $db->sql_query("SELECT user_id,baselang,complexlang,proficiency,canhelp,wanthelp FROM $table WHERE $query ORDER BY proficiency DESC,canhelp DESC $limit");
		}
	} else {
		$result = $db->sql_query("SELECT user_id FROM $table $limit");
	}
	$members = array();
	if ($result) {
		while ($row = $db->sql_fetchrow($result)) {
			if (($facebook) && ($table == 'member_lang')) {
				$members[$row['facebook_uid']] = $row;
			} else {
				$members[$row['user_id']] = $row;
			}
		}
	}
	return $members;	
}

function member_delete_language($user_id, $baselang = false,$complexlang = '',$proficiency = false, $table = 'member_lang') {
	global $db;
	if ($baselang) {
		$query = " AND baselang='$baselang' AND complexlang='$complexlang' AND proficiency='$proficiency'";
	}
	if ((!is_numeric($user_id)) && (!($user_id > 0))) die("Invalid user_id, courageously refusing to delete ($user_id)");
	$db->sql_query("DELETE FROM $table WHERE user_id=$user_id $query");
}

function member_add_language($user_id, $baselang,$complexlang,$proficiency, $canhelp = 0,$wanthelp = 0, $table = 'member_lang') {
	global $db;	
	$sql = "INSERT INTO $table (`user_id`,`baselang`,`complexlang`,`proficiency`,`canhelp`,`wanthelp`) VALUES ('$user_id','$baselang','$complexlang','$proficiency','$canhelp','$wanthelp')";
	if ($baselang == '') die("No baselang: " .$sql);
	$db->sql_query($sql);

}


function member_edit_language($user_id, $old_baselang, $old_complexlang, $old_proficiency, $baselang,$complexlang,$proficiency, $canhelp = 0,$wanthelp = 0, $table = 'member_lang') {
	global $db;	
	$db->sql_query("UPDATE $table SET baselang='$baselang', complexlang='$complexlang', proficiency='$proficiency',canhelp=$canhelp,wanthelp='$wanthelp' WHERE user_id='$user_id' AND baselang='$old_baselang' AND complexlang='$old_complexlang' AND proficiency='$old_proficiency'");
}

/**
* Return a list of proficiencies
*/
function proflist($selected = false) {
	$r = "";
	foreach (array(LANG_NATIVE => out('LANG_NATIVE'),
		LANG_FLUENT => out('LANG_FLUENT'),
		LANG_ADVANCED => out('LANG_ADVANCED'), 
		LANG_INTERMEDIATE => out('LANG_INTERMEDIATE'),
		LANG_BEGINNER => out('LANG_BEGINNER'),
		LANG_INTEREST => out('LANG_INTEREST')) as $key => $value) {
		if ($key === $selected) {
			$extra = "selected=\"selected\"";
		} else {
			$extra = '';
		}
		$r .= "<option value=\"$key\" $extra>$value</option>";
	}
	return $r;
}

?>

