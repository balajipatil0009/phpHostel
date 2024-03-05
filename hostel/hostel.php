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

    <body class="w-[100vw] flex justify-center mt-3">
        <div class="flex border rounded-lg bg-gradient-to-r from-teal-200 to-teal-700">
            <div class="max-h-[90vh]">
                <img src="../assets/findStd.jpg" alt="resister" class="h-[90vh]" />
            </div>
            <div class="w-[100vw] h-fit sm:w-[60vw] md:w-[40vw] lg:w-[30vw] self-center">
                <form action="./hostel.php" method="POST" class="flex flex-col gap-1 p-4 text-lg">
                    <h1 class="text-lg font-bold">Find Student with his Student ID</h1>
                    <input class="border border-0 border-b-2 p-2 rounded-lg" type="number" name="stdID"
                        placeholder="Student ID" class="border border-0 border-b-2 p-2 border-amber-600 rounded-lg" />
                    <button type="submit"
                        class="bg-gradient-to-r from-amber-300 to-amber-500 border-amber-600 w-[10vw] self-center p-1 rounded mt-2">
                        submit
                    </button>
                </form>
            </div>
        </div>
    </body>

</html>

<?php 
require "../conn.php";
$stdID = null;
if (isset($_POST["stdID"])) {
    $stdID = $_POST['stdID'];
}

try{
    if($stdID !== null){

 
    $res = mysqli_query($conn,"SELECT * FROM fees WHERE feeTYPE = 'deposit' AND stdID = $stdID");
                              
    $rows = $res->fetch_all(MYSQLI_ASSOC);
    foreach($rows as $row){
        echo $row['stdID']."<br>";
    }   }
}catch(Exception $e){
    echo $e;
}
?>