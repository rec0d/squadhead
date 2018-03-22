<?php
/* Database for users data*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'tick');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Check connection to Cms Database
try {
  $pdo = new PDO('mysql:host=localhost;dbname=cms', 'root', 'root');
} catch (PDOException $e) {
  exit('Database error.');
}


// Check connection to Search DB
$server = "localhost";
$username = "root";
$password = "";
$dbname = "dbphpsearch";

$conn = mysqli_connect($server, $username, $password, $dbname);
?>