<?php

require '../vendor/autoload.php';

use GuzzleHttp\Client;

$client  = new Client();
$request = $client->getAsync('http://localhost:3000')
    ->then(function ($response) use ($client) {
        $callback1 = $response->getBody();
        $client->getAsync('http://localhost:3000')
            ->then(function ($response) use ($callback1) {
                $callback2 = $response->getBody();
                echo $callback1."\n".$callback2;
            });
    });
$request->wait();



