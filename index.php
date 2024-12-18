<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main menu</title>
    <link rel="stylesheet" href="./view/style/index.css">
    <link rel="stylesheet" href="./view/style/header.css">
    <link rel="stylesheet" href="./view/style/body.css">
    <link rel="icon" href="assets/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta property="og:title" content="Shoppify">
    <meta property="og:description" content="Shopping website. Shop whenever and whatever you want!">
    <meta property="og:image" content="http://shoppify.infinityfreeapp.com/assets/logo.png">
    <meta property="og:type" content="website">
    <meta property="og:logo" content="http://shoppify.infinityfreeapp.com/assets/logo.png">
    <meta property="og:url" content="http://shoppify.infinityfreeapp.com/">
    <meta name="description" content="Shoppify is a website where you can buy several products. Starting from the cheapest to the most expensive ones. It offers the highest quality">
    <meta name="keywords" content="shop, buy, products">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="http://shoppify.infinityfreeapp.com/">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Shoppify">
    <meta name="twitter:description" content="Shoppify. Shop wherever you want and whenever you want.">
    <meta name="author" content="Anchie">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="fb:app_id" content="934771528126307">
    <meta property="og:site_name" content="Shoppify">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  </head>

  <body>
    <div class="nav">
      <a href="./view/php/register.php" class="nav-options">Sign-in</a>
      <a href="./controller/UserRedirect.php" class="nav-options">Log-in</a>
      <a href="./view/php/about.php" class="nav-options">About</a>
      <a href="./view/php/accountInfo.php" class="nav-options">Account info</a>
    </div>

    
    <div class="hamburger-nav">
      <a href="javascript:void(0);" id="icon" onclick="navManipulation()">
        <i class="fa-solid fa-bars fa-2xl" style="color: #c3b1ad;"></i>
      </a>
      <p class="hamburger-header">Shoppify</p>

      
      <div id="links">
        <a href="./view/php/register.php">Sign-in</a>
        <a href="./controller/UserRedirect.php">Log-in</a>
        <a href="./view/php/about.php">About</a>
        <a href="./view/php/accountInfo.php">Account info</a>
      </div>

      
    </div>

    <div class="shop-body">
      <h2 class="header">SHOPIFY</h2>
      <button class="shop-button" onclick="redirect()">SHOP NOW</button>
    </div>

    <div class="description-body">
      <img src="./model/assets/SamsungGalaxy.png" width="350" height="350" class="description-image" alt="phone">
      <p class="description-paragraph">Start buying wherever and whenever you want with the best price to quality ratio with shopify!</p>
    </div>



    <script src="./view/js/index.js"></script>
    <script src="./view/js/hamburgerMenu.js"></script>
  </body>
</html>