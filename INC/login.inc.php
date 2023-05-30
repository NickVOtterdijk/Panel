<?php
// get the funcions.php file
include("functions.php");
require_once 'dbh.inc.php';
session_start();


if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login.php?error=emptyInput");
        exit();
    } else {
        loginUser($conn, $username, $pwd);
    }
} else {
    header("location: ../login.php");
    exit();
} 