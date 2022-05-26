<?php
    $message = "chetor be mah parvaz konim?";
    echo $message;
    // strlen() shomareshe tedad character:
    $tedad = strlen($message);
    echo $tedad;
    echo "<br>";
    
    // trim(): hazf space ha az aval va akhare ye string hast
    $trimShode = trim($message);
    echo $trimShode;
    echo "<br>";
    
    // strtoupper() and strtolower(): case character haro koochiktar ya bozorgtar mikone
    echo strtoupper($message);
    echo "<br>";
    echo strtolower($message);
    echo "<br>";
    
    // str_replace()
    echo str_replace("mah","merikh",$message);
    echo "<br>";
    
    // postion of a word in a string
    echo strpos($message,"mah");
    echo "<br>";

    // az index 0 shoroo kon, 6ta boro jolo cut kon baram biar
    echo substr($message,0,6);

    // escape characters
    echo "yaroo behem goft \"reza\" ";