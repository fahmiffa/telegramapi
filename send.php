<?php

// send messsage
$botToken = "apiTOken";

$data = [
    'chat_id' => "46xxxxx",
    'text' => 'gas kuen',
    'parse_mode' => 'HTML', 
];

$url = "https://api.telegram.org/bot$botToken/sendMessage";


$curl =curl_init();

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data) );
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($curl);
curl_close($curl);

echo "<pre>";
print_r($result);