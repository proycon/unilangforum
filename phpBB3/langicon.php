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
    header('Content-type: image/png');
    if (file_exists($phpbb_root_path . "ext/unilang/languages/styles/all/theme/images/langicons/$lang.png")) {
        cat($phpbb_root_path . "ext/unilang/languages/styles/all/theme/images/langicons/$lang.png");
    } else {
        header('Content-type: image/png');
        cat($phpbb_root_path."images/langicons/noflag.png");
    }
} else {
        header('Content-type: image/png');
        cat($phpbb_root_path."images/langicons/noflag.png");
}

?>
