<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "Hostel";

// Create connection
try{
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
  
}catch (Exception $e){
    echo $e;
}

?>