<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./AllUsers.php" method="POST">
        <label for="find user">Find User By ID</label><br>
        <input type="text" name="ID">
        <button type="submit" onclick="clearhs()">FIND</button>
    </form>
</body>

</html>
<?php
require "/var/www/collage/conn.php";

$ID = $_POST['ID'];
try{
if($ID){
    $res = mysqli_query($conn,"SELECT * FROM fees WHERE feeTYPE = 'sss' AND stdID = $ID ORDER BY tranID DESC");
}else{
    $res = mysqli_query($conn,"SELECT * FROM fees");
}
    if ($res->num_rows > 0) {
        // echo "yes";
       $rows = $res->fetch_all(MYSQLI_ASSOC);
       echo "<table>";
       echo "<tr><th>STUDENT ID</th><th>TRNAGECTION ID</th><th>FOR</th><th>AMOUNT</th><th>DATE</th></tr>";
       foreach($rows as $row){
        echo "<tr><td>".$row["stdID"]."</td><td>".$row["tranID"]."</td><td>".$row["feeTYPE"]."</td><td>".$row['amount']."</td><td>".$row['date']."</td></tr>";
       }
       echo "</table>";
    }else{
        echo "Fees are not paid by the user with ID: $ID";
    }
}catch(Exception $e){
    echo $e;
}
?>

<Style>
table {
    background-color: #00ffde;
    border: 4px solid #6b6a6a;
    border-collapse: collapse;
}

td {
    border: 1px solid;
}
</Style>