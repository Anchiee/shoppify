<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Contact</title>
    <link rel="stylesheet" href="../style/contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>

  <body>
  <div class="nav">
      <a href="./register.php" class="nav-options">Sign-in</a>
      <a href="../../controller/UserRedirect.php" class="nav-options">Log-in</a>
      <a href="./about.php" class="nav-options">About</a>
      <a href="#" class="nav-options" id="chosen-option">Contact</a>
      <a href="./shop.php" class="nav-options">Shop</a>
      <a href="./accountInfo.php" class="nav-options">Account info</a>
    </div>


    <div class="hamburger-nav">
      <a href="javascript:void(0);" id="icon" onclick="navManipulation()">
        <i class="fa-solid fa-bars fa-2xl" style="color: #c3b1ad;"></i>
      </a>
      <p class="hamburger-header">Shoppify</p>

      
      <div id="links">
        <a href="./register.php">Sign-in</a>
        <a href="../../controller/UserRedirect.php">Log-in</a>
        <a href="./about.php">About</a>
        <a href="./shop.php">Shop</a>
        <a href="./accountInfo.php">Account info</a>
      </div>
    </div>


    <div class="contact-body" id="container">
      <div class="input-body">

      <input type="text" placeholder="Enter your username" class="input" id="username">


      <input type="email" placeholder="Enter your email" class="input" id="email">


      <input type="text" placeholder="Enter the title" class="input" id="title">


      <textarea id="description" class="input" placeholder="Message"></textarea>

      <button class="contact-button" onclick="contact()">CONTACT</button>
    </div>

    <div class="info-body">
      <p class="info">Email:Shopify@gmail.com</p>
      <p class="info">Phone number: +48 627 928 214</p>
      <p class="info">Address: Radom, Boleslawa Chrobrego 28</p>

      <div class="social-body">
        <p class="header">Our socials</p>
        
        <div class="socials">
          <i class="fa-brands fa-facebook fa-lg" style="color: #c0b9b1;" class="icons"></i>
          <i class="fa-brands fa-tiktok fa-lg" style="color: #c0b9b1;" class="icons"></i>
          <i class="fa-brands fa-youtube fa-lg" style="color: #c0b9b1;" class="icons"></i>
        </div>
      </div>
    </div>
      
    </div>


    <script src="../js/hamburgerMenu.js"></script>

  </body>
</html>