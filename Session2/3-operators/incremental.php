<?php
    $a = 3;
    $b = $a++;  // $b = $a , $a = $a +1 = 4
    var_dump($a,$b);

    $b = ++$a; // $a & $b == 5

    // --$a