<?php

function addTwoIntegers(int $a,int $b = 100) : int {
    // variable scope
    $sum = $a + $b;
    
    return $sum;
}


echo "salam, mikhaym dota adad jam konim <br>";
$addTwo = addTwoIntegers(1,500);
// $x = $addTwo + 50;
echo $addTwo;
