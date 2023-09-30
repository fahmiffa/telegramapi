<?php
$botToken = "apiTOken";
$dhook = ['url'=>'https://example.com'];

$ch = curl_init();
// info webhook
// curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot'.$botToken.'/getWebhookInfo');

// set webhook
// curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot'.$botToken.'/setWebhook');

// delete webhook
// curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot'.$botToken.'/deleteWebhook');
// curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($dhook) );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

echo "<pre>";
print_r($response);

