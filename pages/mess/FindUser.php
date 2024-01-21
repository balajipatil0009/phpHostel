
<!-- this page is for cheaking that the student paid mess fees or not by its student id -->

<?php
require "/var/www/collage/conn.php";
try{
    $res = mysqli_query($conn,"SELECT * FROM fees");
    if ($res->num_rows > 0) {
        // echo "yes";
       $rows = $res->fetch_all(MYSQLI_ASSOC);
       echo "<table>";
       echo "<tr><th>STUDENT ID</th><th>TRNAGECTION ID</th><th>FOR</th><th>AMOUNT</th><th>DATE</th></tr>";
       foreach($rows as $row){
        echo "<tr><td>".$row["stdID"]."</td><td>".$row["tranID"]."</td><td>".$row["feeTYPE"]."</td><td>".$row['amount']."</td><td>".$row['date']."</td></tr>";
       }
       echo "</table>";
    }
}catch(Exception $e){
    echo $e;
}
?>

<Style>
    table{
        background-color: #00ffde;
    border: 4px solid #6b6a6a;
    border-collapse: collapse;
    }
    td{
        border: 1px solid;
    }
</Style>

