<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "geeksforgeeks";

//Create conn
$conn = new mysqli($servername, $username, $password, $dbname);

//Check conn
if ($conn -> connect_error){
    die("Connection Failed: " . $conn->connect_error);
}
?>