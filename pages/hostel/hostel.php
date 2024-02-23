<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- this form is for cheacking student details by its id -->
    <h1 class="text-lg text-center">Find Student with his Student ID</h1>
    <form action="./hostel.php" method="POST" class="flex flex-col gap-1 p-4">
        <input class="border border-0 border-b-2 p-2" type="number" name="stdID" placeholder="Student ID" />
        <button type="submit" class="bg-sky-400 w-[20vw] self-center p-1 rounded mt-2">
            submit
        </button>
    </form>
</body>

</html>

<?php 
require "/var/www/collage/conn.php";
$stdID = $_POST['stdID'];
try{

    $res = mysqli_query($conn,"SELECT * FROM fees WHERE feeTYPE = 'sss' AND stdID = $stdID");
                              
    $rows = $res->fetch_all(MYSQLI_ASSOC);
    foreach($rows as $row){
        echo $row['stdID']."<br>";
    }
}catch(Exception $e){
    echo $e;
}
?>