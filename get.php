<?php
$botToken = "apiTOken";

// list update message 
$url = 'https://api.telegram.org/bot'.$botToken.'/getUpdates';

// info account
$url = 'https://api.telegram.org/bot'.$botToken.'/getMe';

$res = file_get_contents($url);

print_r($res);

