<?php

// declare variable
$firstValue = 100;
modify($firstValue);

// change variable value
function modify(&$firstValue) {
    $firstValue = 500;
    
    echo "firstValue changed!";
}

// echo the new value
echo $firstValue;


