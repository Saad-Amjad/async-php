<?php
require '../vendor/autoload.php';

use GuzzleHttp\Promise\Promise;
use \GuzzleHttp\Client;

$client  = new Client();
$promise = new Promise();

$promise = $client->getAsync('http://localhost:3000')
    ->then(function ($response) {
        echo $response->getBody();
    });

$promise->wait();

