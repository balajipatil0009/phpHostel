<?php 
require "/var/www/collage/conn.php";
$stdID = $_POST['stdID'];
try{

    $res = mysqli_query($conn,"SELECT * FROM fees WHERE(stdID = $stdID AND feeTYPE = 'sss')");
    $rows = $res->fetch_all(MYSQLI_ASSOC);
    foreach($rows as $row){
        echo $row['stdID']."<br>";
    }
}catch(Exception $e){
    echo $e;
}
?>