<?php

$config = include 'config.php';
$ch = curl_init($config['discord']['webhook']);

$jsonData = array(
    'content' => $config['discord']['message']
);

$jsonDataEncoded = json_encode($jsonData);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

$result = curl_exec($ch);

echo ("Message sent.");