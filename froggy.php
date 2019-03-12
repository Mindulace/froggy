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
        if (!array_key_exists('webhook', $config['discord']) || !isset($config['discord']['webhook'])) {
            throw new \Exception('Webhook not defined.');
        }

        if (!array_key_exists('messages', $config['discord']) || !isset($config['discord']['messages'])) {
            throw new \Exception('Messages not defined.');
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
    
        if ($this->config['discord']['random_message']) {
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
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
    
        try {
            $resultEncoded = curl_exec($ch);
        } catch (\Exception $e) {
            throw new \Exception('Cannot send Message');
        }

        $resultDecoded = (array)json_decode($resultEncoded);

        if ($resultEncoded) {
            $resultDecoded = (array)json_decode($resultEncoded);
            echo ('Couldn\'t send message, Server returned errorcode <b>' . $resultDecoded['code'] . '</b> with the message <b>' . $resultDecoded['message'] .'</b>.');
        } else {
            echo ("Message sent.");
        }
    }
}