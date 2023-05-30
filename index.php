

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Smikkelbeertjes | Home</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
      <link rel="icon" href="IMG/smikkelbeertjes.ico">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
  
<!-- #region Alert --> 
  
  <!-- <script>
    alert("Smikkelbeertjes.nl is a fictional restaurant made for a schoolproject, meaning you can not actually book or order from this website.");
  </script> -->

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

<!-- #region Navbar & Alert -->

<?php
include("INC/functions.php");
navbar();
?>

<!-- #region Div 1 | Banner with welcome text and socials -->

        <div class="overflow-hidden">
            <img class="z-0 vh-100 vw-100 position-absolute" style="object-fit: cover;" src="IMG/bannerfront.png">
            <div class="z-1 vh-100 vw-100 position-absolute bg-dark bg-opacity-50"></div>
            <div class="position-relative d-flex align-items-center flex-column justify-content-center text-white min-vh-100">
                <h1>- SMIKKELBEERTJES -</h1><br>
                <div class="col-sm-4 text-center">
                    <h3>Welcome to Smikkelbeertjes, where culinary enchantment awaits! Experience the epitome of fine dining with our exquisite cuisine and impeccable service. Book your table today for an unforgettable gastronomic journey.</h3>
                </div>
            </div>
        </div>

<!-- #region Div 2 | Gallery and route -->

        <div>
            <div class="z-1 vh-100 vw-100 position-absolute bg-white"></div>
            <div class="position-relative d-flex align-items-center flex-column justify-content-center text-dark min-vh-100">
                <h1>Lorem ipsum</h1><br>
                <div class="col-sm-4 text-center">
                    <h3>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
                </div>
            </div>
        </div>

<!-- #region Footer -->

<?php
footer();
?>
    </body>
</html> 