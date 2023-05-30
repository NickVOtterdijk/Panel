<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Smikkelbeertjes | About</title>
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