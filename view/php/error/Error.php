<?php 
  require_once "../../../configurations/config.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Error</title>
    <link rel="stylesheet" href="../../style/header.css">
    <link rel="stylesheet" href="../../style/body.css">
    <link rel="stylesheet" href="../../style/error.css">
    <link rel="icon" href="../../../assets/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta property="og:title" content="Shoppify">
    <meta property="og:description" content="Shopping website. Shop whenever and whatever you want!">
    <meta property="og:image" content="./assets/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  </head>

  <body>
    <div class="nav">
      <a href="../register.php" class="nav-options">Sign-in</a>
      <a href="../../../controller/UserRedirect.php" class="nav-options">Log-in</a>
      <a href="../about.php" class="nav-options">About</a>
      <a href="../shop.php" class="nav-options">Shop</a>
      <a href="../accountInfo.php" class="nav-options">Account info</a>
    </div>

    
    <div class="hamburger-nav">
      <a href="javascript:void(0);" id="icon" onclick="navManipulation()">
        <i class="fa-solid fa-bars fa-2xl" style="color: #c3b1ad;"></i>
      </a>
      <p class="hamburger-header">Shoppify</p>

      
      <div id="links">
        <a href="../register.php">Sign-in</a>
        <a href="../../../controller/UserRedirect.php">Log-in</a>
        <a href="../about.php">About</a>
        <a href="../shop.php" class="nav-options">Shop</a>
        <a href="../accountInfo.php">Account info</a>
      </div>
    </div>


    <div class="error-div">
      <h1 class="error-header">
        Error occured
        <i class="fa-solid fa-triangle-exclamation"></i>
      </h1>
      <p class="error-info">
        <?php 
          echo $_SESSION["error-info"];
      
        ?>
      </p>
    </div>
    <script src="./view/js/hamburgerMenu.js"></script>
  </body>
</html>