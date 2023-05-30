<?php
    require_once 'dbh.inc.php';
    require_once 'functions.php';
    session_start();

// get the funcions.php file
if (isset($_POST["submit"])) {
    // check if the form has been submitted



    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    // retrieve the values of the input fields from the $_POST superglobal array


    // include the files containing the database connection code and validation functions

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat) !== false) {
        // check if any of the input fields are empty
        header("location: ../signup.php?error=emptyInput");
        exit();
    }

    if (invalidUid($username) !== false) {
        // check if the username is valid
        header("location: ../signup.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        // check if the email is valid
        header("location: ../signup.php?error=emptyemail");
        exit();
    }

    if (pwdMatch($pwd, $pwdrepeat) !== false) {
        // check if the passwords match
        header("location: ../signup.php?error=passworddontmacth");
        exit();
    }

    if (uidExists($conn, $username, $email) !== false) {
        // check if the username or email already exists in the database
        header("location: ../signup.php?error=usernameTaken");
        exit();
    }
    createUser($conn, $name, $email, $username, $pwd);
    // create a new user in the database
}
else {
    header("location: ../signup.php");
    exit();
    // if the form has not been submitted, redirect the user back to the signup page
}


  ?>