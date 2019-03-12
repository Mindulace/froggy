<?php

class froggy
{
    private $config;

    public function __construct()
    {
        $this->getConfig();
    }

    private function checkConfig($config)
    {
        if (array_key_exists('webhook', $config)) {
            throw new \Exception('Webhook not defined.')
        }
    }

    private function getConfig()
    {
        $config = include 'config.php';

        $this->checkConfig($config);
        $this->config = $config;
    }

    public function send()
    {
        $ch = curl_init($this->config['discord']['webhook']);
    
        if($this->config['discord']['random_message']) {
            $message = $this->config['discord']['messages'][array_rand($this->config['discord']['messages'])];
        } else {
            $message = $this->config['discord']['messages'][0];
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
    }

    
}