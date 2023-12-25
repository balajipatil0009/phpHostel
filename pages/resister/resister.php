<?php
require '/var/www/collage/conn.php';
$name = $_POST['name'];
$clgID = $_POST['clgID'];
$course = $_POST['course'];
$contactNo = $_POST['contactNo'];
$parentName = $_POST['parentName'];
$pContact = $_POST['pContact'];
$address = $_POST['address'];
echo "balaji";
if($name && $clgID && $course && $contactNo && $parentName && $pContact && $address)
{
    try{
        $res = mysqli_query($conn,"INSERT INTO students(stdName, clgID, course, contact, parent, pContact, address) VALUES('$name','$clgID','$course','$contactNo','$parentName','$pContact','$address')");
        header('location: resister.html');
    }catch(Exception $e){
        echo $e;
    }
}
?>