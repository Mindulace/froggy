<?php


$url = 'https://discordapp.com/api/webhooks/550385983175131156/LeLEyM9NFW_ai-_p_f4HF-UEcXNpDcoIcoPDcl5lgJcYDRkMHngutd6d1S76_FVfgu3r';
$ch = curl_init($url);

$jsonData = array(
    'content' => 'Quaaak.. Denkt an euren :frog: of the day! @everyone'
);

$jsonDataEncoded = json_encode($jsonData);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

$result = curl_exec($ch);

echo ("Message sent.");