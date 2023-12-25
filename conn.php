<?php

$hostname = "localhost";
$username = "baburaw";
$password = "";
$dbname = "Hostel";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn){
    echo "not connected";
}
?>

