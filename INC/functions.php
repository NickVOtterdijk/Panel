<?php

include('dbh.inc.php');

function navbar()
{
    session_start();
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top bg-white">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="IMG/smikkelbeertjes.png" width="30" height="30" class="d-inline-block align-top rounded" alt="">
            SMIKKELBEERTJES 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="menu.php">MENU</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">LOGIN</a></li>
                    <?php
                    if (isset($_SESSION['userUID'])) {
                        echo '<li class="nav-item"><a class="nav-link" href="index.php">PANEL</a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="INC/logout.inc.php">LOGOUT</a></li>';
                    } 
                    else {
                        echo '<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="Login.php">LOGIN</a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Waiter/Waitress</a></li>
                            <li><a class="dropdown-item" href="">Waiter/Waitress</a></li>
                            <li><a class="dropdown-item" href="">Waiter/Waitress</a></li>
                            </ul>
                            </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php
}

function footer()
{
    ?>
    <footer class="bg-dark text-center text-white">
    <div class="container p-4">
      <section class="mb-4">
        <a class="btn btn-primary shadow-none bg-danger border border-danger" href="https://www.facebook.com/profile.php?id=100092641989616" target="_blank" role="button"><i class="bi bi-facebook"></i></a>
        <a class="btn btn-primary shadow-none bg-danger border border-danger" href="https://twitter.com/restsmikkelbeer" target="_blank" role="button"><i class="bi bi-twitter"></i></a>
        <a class="btn btn-primary shadow-none bg-danger border border-danger" href="https://www.instagram.com/restaurantsmikkelbeertjes" target="_blank" role="button"><i class="bi bi-instagram"></i></a>
      </section>

      <section>
        <div class="container text-center text-md-start mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">Caution</h6>
              <p>Smikkelbeertjes.nl is a fictional restaurant made for a schoolproject, meaning you can not actually book or order from this website.</p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">Opening Times</h6>
                <!-- Retrieve items from database -->
                <p>Wednesday: Time</p>
                <p>Thursday: Time</p>
                <p>Friday: Time</p>
                <p>Saturday: Time</p>
                <p>Sunday: Time</p>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">FAQ</h6>
                <p><a href="#!" class="text-reset">Allergen</a></p>
                <p><a href="#!" class="text-reset">Parking</a></p>
                <p><a href="#!" class="text-reset">Booking</a></p>
                <p><a href="#!" class="text-reset">Contact</a></p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="bi bi-buildings"></i> Helmond, Keizerin Marialaan 2</p>
                <p><i class="bi bi-envelope"></i> Info@smikkelbeertjes.com</p>
                <p><i class="bi bi-telephone"></i> 06-12345678</p>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <p>© 2023 Copyright:
        <a class="text-white" href="smikkelbeertjes.nl">Smikkelbeertjes.nl</a>
    </div>
  </footer>
  <?php
}

function htmlHead()
{ 
  session_start();
    ?>
   <!DOCTYPE html>
<html lang="en">
    <head>
        <title>Smikkelbeertjes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" href="IMG/smikkelbeertjes.ico">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
    <?php
}

function htmlHeader()
{
    
} 



/**
 * @author Nasir
 * @tex
 */
function emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat)
{
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username)
{
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdrepeat)
{
    if ($pwd !== $pwdrepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email)
{
    $sql = "SELECT * FROM user WHERE username = ? OR email = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd)
{
    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (username, email, password, permission, create_time) VALUES (?, ?, ?, ?, NOW())";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $hashedpwd, $permission);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
}

function emptyInputLogin($username, $pwd)
{
    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd)
{
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["userPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["userID"] = $uidExists["usersID"];
        $_SESSION["userUID"] = $uidExists["usersUID"];
        header("location: ../index.php");
        exit();
    }
}

// ------END--------


?>