<?php
include("./include/conn.php");
session_start();

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // username and password sent from form 
    $UserName = mysqli_real_escape_string($db, $_POST['UserName']);
    $Pass = mysqli_real_escape_string($db, $_POST['Pass']);

    $sql = "SELECT * FROM admintbl WHERE username = '$UserName' and passcode = '$Pass'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


    $count = mysqli_num_rows($result);

    // If result matched $UserName and $mypassword, table row must be 1 row
    if ($count == 1) {
        $_SESSION['admin_user'] = $UserName;
        echo "<script>window.location.href='./index.php';</script>";
    } else {
        $error = '<div id="close_alert" class="p-4 mb-4 text-sm text-white rounded-lg bg-red-500 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">Incorrect Credentials !!!</span> try again.
      </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUMAR PATHOLOGY CLINIC | Admin-Login</title>
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css">

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kalam">
    <!-- custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class=" ">

    <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12 bg-gradient-to-b from-blue-200 to-blue-400">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div
                class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-700 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                <div class="max-w-md mx-auto">
                    <img class="w-16 flex justify-center mx-auto my-auto" src="../assets/img/logo.png" alt="">
                    <div class="py-2">
                        <h1 class="text-2xl text-gray-700 font-semibold text-center">Admin Login</h1>
                    </div>
                    <?= $error; ?>
                    <div class="divide-y divide-gray-200">
                        <div class="py-4 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <form action="" method="post">

                                <div class="mb-4 md:w-full">
                                    <label for="email" class="block text-xs mb-1 text-gray-700 ">Username</label>
                                    <input class="w-full border  text-center rounded p-1 outline-none focus:shadow-outline"
                                        type="text" required="" name="UserName" id="email" placeholder=""
                                        autofocus="">
                                </div>
                                <div class="mb-6 md:w-full">
                                    <label for="password" class="block text-xs mb-1 text-gray-700 ">Password</label>
                                    <input class="w-full border text-center rounded p-1 outline-none focus:shadow-outline"
                                        type="password" required="" name="Pass" id="Password" placeholder=""
                                        autofocus="">
                                </div>
                                <button
                                    class="w-full bg-blue-500 hover:bg-blue-700 text-white uppercase text-sm font-semibold px-4 py-2 rounded"
                                    type="submit" name="login">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script>setTimeout(() => {
            let alert = document.getElementById("close_alert");
            alert.style.display = "none";
        }, 1500);</script>
</body>

</html>