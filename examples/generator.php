<?php

function cooking()
{
    echo "Fish"."\n";
    yield;

    echo "Potatoes"."\n";
    yield;

    echo "Sauce"."\n";
    yield;

}

$task    = cooking();
$current = $task->current();
$next    = $task->next();

