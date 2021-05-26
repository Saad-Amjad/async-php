<?php
require '../vendor/autoload.php';

use GuzzleHttp\Promise\Promise;

$promise = new Promise();
$promise->then(function ($value) {
    echo $value;
})->then(function ($error) {
    echo $error;
});

$promise->resolve('Promise resolved');
#$promise->reject('Promise rejected');
