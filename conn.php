<?php

$hostname = "localhost";
$username = "baburaw";
$password = "";
$dbname = "Hostel";

// Create connection
try{
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    $resister = "CREATE TABLE IF NOT EXISTS students (
        stdID INT PRIMARY KEY AUTO_INCREMENT,
        clgID INT,
        course VARCHAR(50),
        contact BIGINT,
        parent VARCHAR(50),
        pcontact BIGINT,
        address VARCHAR(100),
        FOREIGN KEY (clgID) REFERENCES collages(clgID)
    );";

    $que = $conn->query($resister);
    if($que){
        echo "query Execuded table created";
    }
}catch (Exception $e){
    echo "not connected";
}

?>