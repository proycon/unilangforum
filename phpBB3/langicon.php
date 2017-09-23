<?php
$phpbb_root_path = './';

function cat($file) {
        $fp = fopen($file,'r');
        echo fread($fp,filesize($file));
        fclose($fp);
}


if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $lang = str_replace("..","", $lang);
    $lang = str_replace("/","", $lang);
    $lang_alt = $lang;
    $country = ' ';    
    if (strlen($lang) > 3 && strpos($lang, '-')) {
       $seplang = explode ('-', $lang);
       $country = strtoupper($seplang[1]);
       $pos = strpos($lang, '-');
       $lang_alt[$pos + 1] = $country[0];
       $lang_alt[$pos + 2] = $country[1];
       if (strlen($country) == 3) {
        $lang_alt[$pos + 2] = $country[2];
       }

    }
    header('Content-type: image/png');
    if (file_exists($phpbb_root_path . "ext/unilang/languages/styles/all/theme/images/langicons/$lang.png")) {
        cat($phpbb_root_path . "ext/unilang/languages/styles/all/theme/images/langicons/$lang.png");
    } 
    elseif (file_exists($phpbb_root_path . "ext/unilang/languages/styles/all/theme/images/langicons/$lang_alt.png")) {
        cat($phpbb_root_path . "ext/unilang/languages/styles/all/theme/images/langicons/$lang_alt.png");   
     }    
    elseif (file_exists($phpbb_root_path . "ext/unilang/languages/styles/all/theme/images/countryicons/$country.png")) {
        cat($phpbb_root_path . "ext/unilang/languages/styles/all/theme/images/countryicons/$country.png");   
     }             
    else {
                 header('Content-type: image/png');
                 cat($phpbb_root_path."ext/unilang/languages/styles/all/theme/images/langicons/noflag.png");
     }
} else {
        header('Content-type: image/png');
         cat($phpbb_root_path."ext/unilang/languages/styles/all/theme/images/langicons/noflag.png");
         
}

?>
