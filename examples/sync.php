<?php

call_user_func('fish');
call_user_func('potatoes');
call_user_func('sauce');


function cooking($item, $time)
{
    sleep($time);
    echo "Finished cooking ".$item."\n";
}

function fish()
{
    echo "Prepare fish\n";
    sleep(2);
    cooking('fish', 3);
}

function potatoes()
{
    echo "Prepare potatoes\n";
    sleep(1);
    cooking('potatoes', 3);
}

function sauce()
{
    echo "Prepare sauce\n";
    sleep(1);
    echo "Finished sauce making\n";
}

