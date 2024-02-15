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
            </a><a href="">
                <h4 class="p-2 bg-blue-400 text-lg rounded w-[100%] border mt-2">
                    Mess
                </h4>
            </a><a href="">
                <h4 class="p-2 bg-blue-400 text-lg rounded w-[100%] border mt-2">
                    Resister
                </h4>
            </a><a href="">
                <h4 class="p-2 bg-blue-400 text-lg rounded w-[100%] border mt-2">
                    Login
                </h4>
            </a><a href="">
                <h4 class="p-2 bg-blue-400 text-lg rounded w-[100%] border mt-2">
                    Hostel
                </h4>
            </a><a href="">
                <h4 class="p-2 bg-blue-400 text-lg rounded w-[100%] border mt-2">
                    Report
                </h4>
            </a>
        </div>
        <div>
            <div
                class="flex flex-col justify-evenly w-[100vw] min-h-[50vh] border items-center md:flex-row gap-2 md:w-[80vw]">
                <div
                    class="flex flex-col text-center items-center w-[30vh] h-[40vh] py-[10vh] rounded-xl text-lg bg-teal-200 max-h-[180px]">
                    <h5>
                        Totle Rooms
                    </h5>
                    <h1>40</h1>
                </div>
                <div
                    class="flex flex-col text-center items-center w-[30vh] h-[40vh] py-[10vh] rounded-xl text-lg bg-teal-200 max-h-[180px]">
                    <h5>
                        Avalible Rooms
                    </h5>
                    <h1>40</h1>
                </div>
                <div
                    class="flex flex-col text-center items-center w-[30vh] h-[40vh] py-[10vh] rounded-xl text-lg bg-teal-200 max-h-[180px]">
                    <h5>
                        Assigned Rooms
                    </h5>
                    <h1>0</h1>
                </div>
            </div>
        </div>
    </div>

</body>

</html>