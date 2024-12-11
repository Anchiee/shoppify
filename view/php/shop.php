<?php $title = "Shop"?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "templates/head.php"?>
    <link rel="stylesheet" href="../style/shop.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/body.css">
    <link rel="stylesheet" href="../style/productList.css">
  </head>

  <body>

    <?php include "templates/nav.php"?>

    <form action="../../controller/FormHandlerSearch.php" method="get" class="search-form">
        <input type="search" placeholder="Search for products" class="search-input" name="search">
        <button>Search</button>
    </form>


    <div class="products-container">
      <p class="suggested-header">Suggested products</p>

      <div class="container">

        <?php
          require "../../model/database/ReadProducts.php";

          $result = returnAllProducts();
          
          for($i = 0; $i < 3; $i++)
          {
            $randomProductIndex = rand(0, sizeof($result) - 1);

            echo "<form action='../../controller/FormHandlerCart.php' method='post' class='product-container'>"; 
            echo "<p>ID:" . $result[$randomProductIndex]["id"] . "</p>";
            echo "<h1>" . $result[$randomProductIndex]["productName"] . "</h1>";
            echo "<input type='hidden' name='product-name' value='" . $result[$randomProductIndex]["productName"] . "'>";
            echo "<p>Price:" . $result[$randomProductIndex]["price"] . "</p>";
            echo "<h2>Processor speed</h2>";
            echo "<p>Base clock speed:" . $result[$randomProductIndex]["base_clock"] . "</p>";
            echo "<p>Boosted clock speed:" . $result[$randomProductIndex]["boosted_clock"] . "</p>";
            echo "<p>ROMStorage:" . $result[$randomProductIndex]["ROMStorage"] . "</p>";
            echo "<p>RAMStorage:" . $result[$randomProductIndex]["RAMStorage"] . "</p>";
            echo "<button class='check-out'>Add to cart</button>";
            echo "</form>";
          }

          
        ?>
      </div>

      
    </div>



  <script src="../js/hamburgerMenu.js"></script>
  </body>

</html>