<?php

// List
$bazigaran = [];
var_dump($bazigaran);
echo "<br>";
$bazigaran = ["Harry", "Ron", "Hermion"];
var_dump($bazigaran);
echo "<br>";

// access to element number 1 (after zero)
echo $bazigaran[1];


// Map
$bazigaran2 = [];
$bazigaran2 = [
    "kilid" => "meghdar",
    "name" =>  "harry potter"
];

$mapHarry = [
    "name" => "harry potter",
    "details" => [
        "age" => 20,
        "school" => "hogwartz"
    ]
];

echo "<pre>";
var_dump($mapHarry);
echo "</pre>";

$ageHarry = $mapHarry["details"]["age"];
echo $ageHarry;


// adding/update element to existing list:
// update
$bazigaran[1] = "Snape";
var_dump($bazigaran);

$bazigaran[] = "Ron";
echo "<pre>";
var_dump($bazigaran);
echo "</pre>";


print_r($bazigaran);

if (in_array("Ron",$bazigaran) == true) {
    echo "Ron too bazigaran hast";
}

// index (key) element  ro barmigardoone
echo array_search("Ron",$bazigaran);
echo "<br>";

var_dump(empty($bazigaran));
echo "<br>";

var_dump(isset($bazigaran[4]));
echo "<br>";

var_dump(array_keys($mapHarry));
echo "<br>";

//TODO: sort functions for arrays