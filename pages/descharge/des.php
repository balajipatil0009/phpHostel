<?php 
require "/var/www/collage/conn.php";
$stdID = $_POST['stdID'];
try{
     mysqli_query($conn,"UPDATE rooms SET stdID=NULL WHERE(stdID = $stdID)");
     header('location: des.html');
}catch(Exception $e){
    echo $e;
}
?>
