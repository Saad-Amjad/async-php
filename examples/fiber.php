<?php

// requires php 8.1, sample example

$fiber = new Fiber(function($message) {
    echo $message;
    #Fiber::suspend();
    echo "Potatoes Cooked!";
});
$fiber->start('Preparing Potatoes');
echo "Cooking Potatoes...\n";
$fiber->resume();
