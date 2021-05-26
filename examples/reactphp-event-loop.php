<?php

require './vendor/autoload.php';

$loop = React\EventLoop\Factory::create();

echo "Prepare fish\n";
$loop->addTimer(2, function () {
    fish();
});

echo "Prepare potatoes\n";
$loop->addTimer(1, function () {
    potatoes();
});

echo "Prepare sauce\n";
$loop->addTimer(1, function () {
    sauce();
});

$loop->run();

function cooking($item, int $time)
{
    sleep($time);
    echo "Finished cooking ".$item."\n";
}

function fish()
{
    cooking('fish', 3);
}
function potatoes()
{
    cooking('potatoes', 3);
}

function sauce()
{
    echo "Finished sauce making\n";
}

