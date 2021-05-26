<?php

function cooking()
{
    echo "Fish"."\n";
    while (true) {
        $string = yield;
        echo $string.PHP_EOL;
    }

}

$task = cooking();
$task->send('Potatoes');
$task->send('Sauce');



