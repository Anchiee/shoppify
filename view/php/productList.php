<!DOCTYPE html>
<html lang="en">

<head>
  <title>Product list</title>
  <link rel="stylesheet" href="../style/header.css">
  <link rel="stylesheet" href="../style/body.css">
  <link rel="stylesheet" href="../style/productList.css">
  <link rel="stylesheet" href="../style/shop.css">
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
    <a href="./contact.php" class="nav-options">Contact</a>
    <a href="#" class="nav-options" id="chosen-option">Shop</a>
    <a href="./accountInfo.php" class="nav-options">Account info</a>
  </div>


  <div class="hamburger-nav">
    <a href="javascript:void(0);" id="icon" onclick="navManipulation()">
      <i class="fa-solid fa-bars fa-2xl" style="color: #c3b1ad;"></i>
    </a>
    <p class="hamburger-header">Shoppify</p>
  </div>

    
    <div id="links">
      <a href="./register.php">Sign-in</a>
      <a href="../../controller/UserRedirect.php">Log-in</a>
      <a href="./about.php">About</a>
      <a href="./shop.php">Shop</a>
      <a href="./accountInfo.php">Account info</a>
    </div>


    <form action="../../controller/FormHandlerSearch.php" method="get" class="search-form">
        <input type="search" placeholder="Search for products" class="search-input" name="search">
        <button>Search</button>
    </form>

    <div class="container">
      <?php 

        require "../../configurations/config.php";
        require "../../model/database/ReadProducts.php";

        $productName = $_SESSION["product"];
        $result = returnProducts($productName);

        foreach($result as $column)
        {
          echo "<form action='../../controller/FormHandlerCart.php' method='post' class='product-container'>"; 
          foreach($column as $row => $value)
          {
            
            
            if($row == "id")
            {
              echo "<p>ID: $value</p>";
              continue;
            }
            if($row == "productName")
            {
              echo "<h1>$value </h1>";
              echo "<input type='hidden' name='product-name' value='$value'>";
              continue;
            }
            else if($row == "price")
            {
              echo "<p>$value$ </p>";
              continue;
            }
            else if($row == "base_clock")
            {
              echo "<h2>Processor speed</h2>";
              echo "<p>Base clock speed: $value </p>";
              continue;
            }
            else if($row == "boosted_clock")
            {
              echo "<p>Boosted clock speed: $value </p>";
              continue;
            }
            else
            {
              echo "<p>$row: $value </p>";
            }
          }

          echo "<button class='check-out'>Add to cart</button>";

          echo "</form>";
        }

      ?>
    </div>



<script src="../js/hamburgerMenu.js"></script>
</body>
</html>