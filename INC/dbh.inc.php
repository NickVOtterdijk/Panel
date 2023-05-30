<?php

$servername = "45.128.157.4";
$username = "u5198_lPVuO6adJl";
$password = "g8y9j@wNcFc2+xrlgXB2ZDwy";
$dbname = "s5198_Smikkelbeertjes";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

return $conn;