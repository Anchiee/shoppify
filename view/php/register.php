<?php $title = "Sign-in"?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "templates/head.php"?>
  <link rel="stylesheet" href="../style/register.css">
  <link rel="stylesheet" href="../style/header.css">
  <link rel="stylesheet" href="../style/body.css">
  <link rel="icon" href="../../assets/logo.png">
</head>

<body>
  <nav>
    <?php include "templates/nav.php"?>
  </nav>

  <main>
    <form action="../../controller/FormHandlerRegister.php" method="post">
      <input type="text" placeholder="Enter your username" class="input" name="username" required>
      <input type="password" placeholder="Enter your password" class="input" name="password" required>
      <input type="email" placeholder="Enter your email" class="input" name="email" required>
      <input type="tel" placeholder="Enter your phone number" class="input" name="phone" required>

      <button class="sign-button">SIGN-IN</button>

      
      <div class="login-container">
        <p class="login-text">Already have an account? &#8226; <a href="./login.php" class="login-option">Log-in</a></p>        
      </div>
      
    </form>
</main>

<script src="../js/hamburgerMenu.js"></script>
</body>
</html>