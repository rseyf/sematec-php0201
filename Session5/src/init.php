<?php
require_once __DIR__ ."/autoloader.php";

$host = "localhost";
$dbname = "seyf1";
$user = "root";
$pass = "";
$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);


// standard querying in php pdo

// $query = "SELECT * FROM book WHERE author = :nevisande";
// $statement = $db->prepare($query);
// $statement->bindValue("nevisande","paulo");
// $statement->execute();
// $results = $statement->fetchAll();
// foreach ($results as $radif) {
//     echo $radif["title"] . "<br>";
// }

// $query = "UPDATE seyf1.book SET title = 'test22' where id = 8";
// $db->query($query);


// CRUD:
// -------
// Create
// Read
// Update
// Delete

$query2 = "DELETE FROM seyf1.book WHERE id = 8";
$db->query($query2);

// select * query
$rows = $db->query("SELECT * FROM book");
foreach ($rows as $radif) {
    echo "<pre>";
    echo $radif["title"];
    // var_dump($radif);
    echo "</pre>";
}


// embedded line query (not recommended)
// $query = <<<SQL
// INSERT INTO seyf1.book (isbn,title,author,price) 
// VALUES (91823719827,"farm animals","george orwel",6)
// SQL;

// $result = $db->exec($query);
// var_dump($result);


