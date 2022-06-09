<?php
// var_dump(__DIR__);
require_once __DIR__ . "/func.php";
// printHead();
// printFooter();

$myData = [
    "name" => "Reza Seyf",
    "courses" => [
        "php", 
        "golang",
    ]
];
 
// serialization to json:
// echo json_encode($myData);
// echo file_get_contents("robatkarim.txt");


// deserialization from json to standard objects in php:
$readedFile = file_get_contents("person.json");
$decodedFile = json_decode($readedFile);
$coursesArray = $decodedFile->courses;
echo "Person Skills:";
foreach ($coursesArray as $course) {
    echo $course . " / ";
}  

// var_dump(($coursesArray));

// person skills write file
file_put_contents("skills.json",json_encode($coursesArray));