<?php

$urls = [];
$urls[] = 'http://google.com';
$urls[] = 'http://msn.com';
$urls[] = 'http://yahoo.com';

header('Location: ' . $urls[rand(0, count($urls) - 1)]);
