<?php $title = "Log-in"?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "templates/head.php"?>
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/body.css">
    <link rel="icon" href="../../assets/logo.png">
  </head>

  <body>
    
    <?php include "templates/nav.php"?>

    <form action="../../controller/FormHandlerLogin.php" method="post">
      <input type="text" placeholder="Enter your username/email" class="input" name="username">
      <input type="password" placeholder="Enter your password" class="input" name="password">

      <button class="login-button">LOG-IN</button>

      <div class="sign-container">
        <p class="sign-text">Don't have an account? &#8226; <a href="./register.php" class="sign-option">Sign-in</a></p>
        <p class="platforms-text">use other platforms</p>

        <div class="platforms">
          <i class="fa-brands fa-discord fa-lg" style="color: #858282;"></i>
          <i class="fa-brands fa-google fa-lg" style="color: #858282;"></i>
          <i class="fa-brands fa-facebook fa-lg" style="color: #858282;"></i>
          <i class="fa-brands fa-microsoft fa-lg" style="color: #858282;"></i>
        </div>
        
      </div>
      
    </form>
      
    

  <script src="../js/hamburgerMenu.js"></script>
  </body>
</html>