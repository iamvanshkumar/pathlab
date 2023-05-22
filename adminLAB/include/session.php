<?php
include("./include/conn.php");
session_start();

$userCheck = $_SESSION['admin_user'];

$ses_sql = mysqli_query($db, "select username from admintbl where username = '$userCheck' ");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['username'];

if (!isset($_SESSION['admin_user'])) {
    header("location:./login.php");
    die();
}
?>