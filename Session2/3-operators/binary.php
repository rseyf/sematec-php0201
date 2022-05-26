<?php
    $mohsenIsInHome = true;
    $mohsenGotBike = true;
    // && -> And
    // hardota shart bayad true bashan
    if ($mohsenIsInHome && $mohsenGotBike) {
        // age shart dorost bashe miad injaro ejra mikone
        echo "Mohsen! motor zire pate va khoonei boro noon bekhar <br>";
    }

    $mohsenIsInHome = true;
    $mohsenGotBike = false;

    // yeki az shartha true bashe oke 
    if ($mohsenIsInHome || $mohsenGotBike) {
        echo "Mohsen motor zir pate boro noon begir bia khoone<br>  ";
    }

    // ! not
    if ($mohsenIsInHome == false) {
        echo "mohsen khoone nis";
    }
    if ($mohsenIsInHome) { // == true 
        echo "mohsen khoonast";   
    }

    if (!$mohsenIsInHome) {
        echo "mohsenIsInHome == false hamoon !mohsenIsInHome hast";
    }

