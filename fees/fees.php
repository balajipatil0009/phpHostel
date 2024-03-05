<?php 
require '/var/www/collage/conn.php';
$stdID = $_POST['stdID'];
$feeTYPE = $_POST['feeTYPE'];
$amount = $_POST['amount'];

if($stdID && $feeTYPE && $amount && $conn){
    try{
        $res = mysqli_query($conn,"INSERT INTO fees(stdID, feeTYPE, amount) VALUES($stdID,'$feeTYPE',$amount)");
    }catch(Exception $e){
        echo $e;
    }
}else{
echo $stdID.$amount.$feeTYPE;
}
?>