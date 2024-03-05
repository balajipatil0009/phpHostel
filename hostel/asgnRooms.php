<?php 
require "../conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellspacing="0">
        <tr>
            <th>Room No</th>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Education</th>
        </tr>
        <?php 
        $rooms = $conn->query("SELECT students.*, rooms.*
        FROM students
        INNER JOIN rooms ON students.stdID = rooms.stdID
        WHERE rooms.asgn=1;");
        while ($row = $rooms->fetch_assoc()) {
            $stdID = $row["stdID"];
            $link = "<td class='text-red-300'><a href='../dashbord/studDetails.php?stdID=$stdID'>";
                        echo "<tr><td>".$row["id"]."</td><td>".$row["stdID"]."<td>".$row["stdNm"]."</td><td>".$row["course"]."</td>".$link."See Details</td><a></tr>";
        }
        ?>
    </table>
</body>

</html>