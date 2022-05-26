<?php
$n = 0;
while ($n < 5) {
    $n++;
}
// echo $n;


// yekbar shart ro ejra mikone bad shart ro check mikone
$i= 1;
do {
    echo $i . ", ";
    $i++;
} while ($i < 0);


echo "<br>";


// halghe for
$bazigaran = ["Harry", "Ron", "Hermion"];

for ($i = 0; $i < count($bazigaran); $i++) { 
    echo $bazigaran[$i];
    echo ", ";
}

echo "<br>";

foreach($bazigaran as $arrayIndex => $actorName) {
    echo $actorName . " is located in index " . $arrayIndex . " <br>";
}