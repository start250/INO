<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="inobase";

$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) {
    die("Error connecting to db. Contact site admin");
}  
?>