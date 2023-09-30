<?php

$botToken = "apiTOken";

$content = file_get_contents("php://input");
$update = json_decode($content, true);
if($update != null)
{
    $chatID = $update["message"]["chat"]["id"];
    $message = $update["message"]["text"];
    
    $data = [
                'chat_id' => $chatID,
                'text' => $message,
                'parse_mode' => 'HTML', 
            ];
            
    $url = "https://api.telegram.org/bot$botToken/sendMessage";
 
    $curl =curl_init();
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data) );
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    $result = curl_exec($curl);
    
}

