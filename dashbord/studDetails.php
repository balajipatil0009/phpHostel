<?php 
require_once "../conn.php";
 $stdID = $_GET['stdID'];
$studDetails = $conn->query("SELECT students.*, collages.*
 FROM students
 INNER JOIN collages ON students.clgID = collages.clgID
  WHERE stdID=$stdID");
$row = $studDetails->fetch_assoc();
$stdNm = $row['stdNm'];
$clgNm=$row['name'];
$course = $row['course'];
$contactNo = $row['contact'];
$address = $row['address'];
$prntContact = $row['pcontact'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="w-[100vw] h-[100vh] bg-red-100 flex justify-center">
    <div>
        <div>
            <h1 class="text-[40px] font-bold">
                Student Details
            </h1>
            <div>
                <div class="flex w-[100%] justify-between">
                    <h1 class="text-lg font-bold">Name</h1>
                    <h1 class="text-lg"><?php 
   echo "$stdNm";
   ?></h1>
                </div>
                <div class="flex w-[100%] justify-between">
                    <h1 class="text-lg font-bold">Course</h1>
                    <h1 class="text-lg"><?php 
   echo "$course";
   ?></h1>
                </div>
                <div class="flex w-[100%] justify-between">
                    <h1 class="text-lg font-bold">Collage Name</h1>
                    <h1 class="text-lg"><?php 
   echo "$clgNm";
   ?></h1>
                </div>
                <div class="flex w-[100%] justify-between">
                    <h1 class="text-lg font-bold">Contact Number</h1>
                    <h1 class="text-lg"><?php 
   echo "$contactNo";
   ?></h1>
                </div>
                <div class="flex w-[100%] justify-between">
                    <h1 class="text-lg font-bold">Perent contact </h1>
                    <h1 class="text-lg"><?php 
   echo "$prntContact";
   ?></h1>
                </div>
                <div class="flex w-[100%] justify-between">
                    <h1 class="text-lg font-bold">Name</h1>
                    <h1 class="text-lg"><?php 
   echo "$address";
   ?></h1>
                </div>
                <div>
                </div>

            </div>
            <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>