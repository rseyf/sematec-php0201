<?php
require_once __DIR__ ."/autoloader.php";

$host = "localhost";
$dbname = "seyf1";
$user = "root";
$pass = "";
$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

$query = "SELECT * FROM book";

$rows = $db->query($query);
foreach ($rows as $radif) {
    echo "<pre>";
    echo $radif["title"];
    // var_dump($radif);
    echo "</pre>";
}



