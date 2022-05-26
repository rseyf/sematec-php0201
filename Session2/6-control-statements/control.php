<?php

// if/else
// default value
$nomre = 9;
$mashroot = false;
$ekhraj = false;

$natije = "";
// aval adade nomre ro check konim
if ($nomre > 20 || $nomre < 0) {
    $natije = "nomre sahih nist";
} else {
    // nomre beyne 0 ta 20 hast
    if ($nomre <= 12 && $nomre >= 10) {
        $mashroot = true;
        $natije = "faghat mashroot";
    } else if ($nomre < 10) {
        $mashroot = true;
        $ekhraj = true;
        $natije = "mashoort va ekhraj";
    } else if ($nomre == 20){
        $natije = "baba barikallaaa";
    } else  {
        // ghabool
        $natije =  "ghabool shodiiii";
    }
}

$name = "mohammad";
switch ($name) {
    case "Reza":
        echo "mojaz be vorood nist";
        break;
    case "ali":
        echo "khosh oomadi alijan";
        break;

    default:
        echo "baraye vorood bayad esme shoma ali bashse";
        break;

}

?>

<html>
    <head></head>
    <body>
    <h1><?php echo $nomre ?></h1>  
    <h1><?php echo $natije ?></h1>  

    <?php if ($mashroot): ?>
        <h1>MASHROOOT SHODI</h1>
    <?php else: ?>
        <h2>mashroot nashodi</h2>
    <?php endif ?>


    
    <body>
</html>


















