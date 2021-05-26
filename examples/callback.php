<?php

function cooking($callback)
{
    sleep(2);
    $callback();
    echo "Finished cooking"."\n";;
}

function fish()
{
    echo "Prepare fish"."\n";
}

cooking('fish');
