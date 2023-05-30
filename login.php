<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Smikkelbeertjes | Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" href="IMG/smikkelbeertjes.ico">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
<!-- #region Style -->

        <style>
            @font-face { 
                font-family: myBoldFont;
                src: url("FNT/Gotham-Bold.woff2") format('woff2');
            }

            body {
                font-family: myBoldFont, serif;
            }
        </style>

<!-- #region Navbar -->

<?php
include("INC/functions.php");
navbar();
?>

<link rel="stylesheet" href="CSS/login.css">
<section class="login-form">
    <h2>Log in</h2>
    <form action="inc/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Full name / Email...">
        <br>
        <input type="password" name="pwd" placeholder="password...">
        <br>
        <br>
        <button type="submit" name="submit"> Log in </button>
        <?php
        if (isset($_GET["error"])) {
            // Check the value of the "error" parameter and display a message accordingly
            if ($_GET["error"] == "emtyinput") {
                echo "<p> Fill in all fields!!!</p>";
            } else if ($_GET["error"] == "invaliduid") {
                echo "<p> Choose a proper username!!</p>";
            } else if ($_GET["error"] == "wronglogin") {
                echo "<p> incorect login information!</p>";
            }

        }
        ?>
    </form>
</section>



</div>