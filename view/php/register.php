<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign-in</title>
    <link rel="stylesheet" href="../style/register.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/body.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="nav">
      <a href="#" class="nav-options" id="chosen-option">Sign-in</a>
      <a href="../../controller/UserRedirect.php" class="nav-options">Log-in</a>
      <a href="./about.php" class="nav-options">About</a>
      <a href="./contact.php" class="nav-options">Contact</a>
      <a href="./shop.php" class="nav-options">Shop</a>
      <a href="./accountInfo.php" class="nav-options">Account info</a>
    </div>
    

    <div class="hamburger-nav">
      <a href="javascript:void(0);" onclick="navManipulation()" id="icon">
        <i class="fa-solid fa-bars fa-2xl" style="color: #c3b1ad;"></i>
      </a>
      <p class="hamburger-header">Shoppify</p>

      <div id="links">
        <a href="../../controller/UserRedirect.php">Log-in</a>
        <a href="./about.php">About</a>
        <a href="./contact.php">Contact</a>
        <a href="./shop.php">Shop</a>
        <a href="./accountInfo.php">Account info</a>
      </div>

    </div>

    <form action="../../controller/FormHandlerRegister.php" method="post">
      <input type="text" placeholder="Enter your username" class="input" name="username" required>
      <input type="password" placeholder="Enter your password" class="input" name="password" required>
      <input type="email" placeholder="Enter your email" class="input" name="email" required>
      <input type="tel" placeholder="Enter your phone number" class="input" name="phone" required>

      <button class="sign-button">SIGN-IN</button>

      
      <div class="login-container">
        <p class="login-text">Already have an account? &#8226; <a href="./login.php" class="login-option">Log-in</a></p>
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