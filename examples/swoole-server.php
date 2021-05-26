<?php
$http = new Swoole\HTTP\Server("0.0.0.0", 3000);

$http->on('start', function ($server) {
    echo "Swoole http server is started at http://127.0.0.1:3000\n";
});

$http->on('request', function ($request, $response) {
    $response->header("Content-Type", "text/plain");
    $response->end("Hello Swoole World!\n");
});

$http->start();