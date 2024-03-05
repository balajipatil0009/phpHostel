<?php
require_once "../conn.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="flex flex-col md:flex-row">
        <div class="flex w-[100vw] border h-[10vh] bg-blue-100 md:flex-col md:h-[100vh] md:w-[20vw]">
            <a href="">
                <h4 class="p-2 bg-blue-400 text-lg rounded w-[100%] border mt-2">
                    Dashbord
                </h4>
            </a><a href="../resister/resister.html">
                <h4 class="p-2 bg-blue-400 text-lg rounded w-[100%] border mt-2">
                    Resister
                </h4>
            </a><a href="../joining/joining.html">
                <h4 class="p-2 bg-blue-400 text-lg rounded w-[100%] border mt-2">
                    Joining
                </h4>
            </a>
            <a href="../discharge/des.html">
                <h4 class="p-2 bg-blue-400 text-lg rounded w-[100%] border mt-2">
                    Discharge
                </h4>
            </a><a href="../hostel/hostel.php">
                <h4 class="p-2 bg-blue-400 text-lg rounded w-[100%] border mt-2">
                    Paid Fees
                </h4>
            </a>
            </a><a href="../fees/fees.html">
                <h4 class="p-2 bg-blue-400 text-lg rounded w-[100%] border mt-2">
                    Pay Fees
                </h4>
            </a>
            <a href="../report/report.html">
                <h4 class="p-2 bg-blue-400 text-lg rounded w-[100%] border mt-2">
                    Report
                </h4>
            </a>

        </div>
        <div class="max-h-[100vh] overflow-scroll">
            <div class="w-[78vw]">
                <img src="../assets/dashboard.svg" alt="" srcset="">
            </div>
            <div class="flex flex-col gap-2 justify-evenly border items-center md:flex-row py-4 pb-8">

                <div
                    class="flex flex-col text-center items-center w-[30vh] h-[40vh] py-[10vh] rounded-xl text-lg bg-teal-200 max-h-[180px]">
                    <h5>
                        Totle Rooms
                    </h5>
                    <?php 
                    $res = $conn-> query("SELECT COUNT(id) as row_count FROM rooms");
                    if($res){
                        $row = $res->fetch_assoc();
                        $avlRooms = $row['row_count'];
                         echo "<h1>$avlRooms</h1>";
                                       }
                                       else{ echo'nothing';}
                    ?>
                </div>
                <div
                    class="flex flex-col text-center items-center w-[30vh] h-[40vh] py-[10vh] rounded-xl text-lg bg-sky-500 max-h-[180px]">
                    <h5>
                        Avalible Rooms
                    </h5>
                    <?php 
                    $res = $conn-> query("SELECT COUNT(id) as row_count FROM rooms WHERE asgn=0");
                    if($res){
                        $row = $res->fetch_assoc();
                        $avlRooms = $row['row_count'];
                         echo "<h1>$avlRooms</h1>";
                                       }
                                       else{ echo'nothing';}
                    ?>
                </div>
                <a href="../hostel/asgnRooms.php">
                    <div
                        class="flex flex-col text-center items-center w-[30vh] h-[40vh] py-[10vh] rounded-xl text-lg bg-rose-600 max-h-[180px]">
                        <h5>
                            Assigned Rooms
                        </h5>
                        <?php 
                    $res = $conn-> query("SELECT COUNT(id) as row_count FROM rooms WHERE asgn=1");
                    if($res){
                        $row = $res->fetch_assoc();
                        $avlRooms = $row['row_count'];
                         echo "<h1>$avlRooms</h1>";
                                       }
                                       else{ echo'nothing';}
                    ?>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <?php 
     $asgn_rooms = $conn->query("SELECT * FROM rooms WHERE asgn=1");
   ?>
    <script>

    </script>
</body>

</html>