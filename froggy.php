<?php

$config = include 'config.php';
$ch = curl_init($config['discord']['webhook']);

if($config['discord']['random_message']) {
    $message = $config['discord']['messages'][array_rand($config['discord']['messages'])];
} else {
    $message = $config['discord']['messages'][0];
}

$jsonData = array(
    'content' => $message
);

$jsonDataEncoded = json_encode($jsonData);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

$result = curl_exec($ch);

echo ("Message sent.");