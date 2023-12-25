<?php 
require "/var/www/collage/conn.php";
$stdID = $_POST['stdID'];
try{
    mysqli_query($conn,"INSERT INTO studyRM(stdID) VALUES($stdID)");
}catch(Exception $e){
    echo $e;
}
?>