<?php

// get the funcions.php file
include("inc/functions.php");
// show the HTML page start with navbar included
htmlHead();



?>

<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="inc/signup.inc.php" method="post">
        <br>
        <input type="text" name="name" placeholder="Full name...">
        <br>
        <input type="text" name="email" placeholder="email...">
        <br>
        <input type="text" name="uid" placeholder="Username...">
        <br>
        <input type="password" name="pwd" placeholder="password...">
        <br>
        <input type="password" name="pwdrepeat" placeholder="Repeat password...">
        <br>
        <br>
        <button type="submit" name="submit"> sign up </button>
        <?php
// Check if the "error" parameter is set in the URL
if (isset($_GET["error"])) {
    // Check the value of the "error" parameter and display a message accordingly
    if ($_GET["error"] == "emtyinput") {
        echo "<p> Fill in all fields!!!</p>";
    } else if ($_GET["error"] == "invaliduid") {
        echo "<p> Choose a proper username!!</p>";
    } else if ($_GET["error"] == "emptyemail") {
        echo "<p> Choose a proper email!</p>";
    } else if ($_GET["error"] == "passworddontmacth") {
        echo "<p> Password does not match!!</p>";
    } else if ($_GET["error"] == "usernameTaken") {
        echo "<p> Username already taken buddy!!</p>";
    } else if ($_GET["error"] == "stmtfailed") {
        echo "<p> Someting went wrong, try again!!!</p>";
    }

    // If there are no errors, display a "thank you" message
    else if ($_GET["error"] == "none") {
        echo "<p>Thank you for creating an account with GameWorld! Were excited to have you as a part of our community. You can now access all of the features of our website, including the latest games, reviews, and forums. If you have any questions or concerns, please dont hesitate to contact us. We hope you enjoy your experience at GameWorld!!!!</p>";
    }
}



?>
    </form>
    
</section>


</div>