<?php 
require "/var/www/collage/conn.php";
$stdID = $_POST['stdID'];
$amount = $_POST['amount'];
$roomID = $_POST['roomID'];
if($stdID && $conn && $amount && $roomID){
    try{
        mysqli_query($conn,"UPDATE rooms SET stdID = $stdID WHERE(roomID = $roomID)");
        mysqli_query($conn,"INSERT INTO fees(feeTYPE, stdID, amount) VALUES('deposit',$stdID,$amount)");
        header('location: joining.html');
    }catch(Exception $e){
           echo $e;
    }
}
?>