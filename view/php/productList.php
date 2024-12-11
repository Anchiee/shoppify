<?php $title = "Product list"?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "templates/head.php"?>
  <link rel="stylesheet" href="../style/header.css">
  <link rel="stylesheet" href="../style/body.css">
  <link rel="stylesheet" href="../style/productList.css">
  <link rel="stylesheet" href="../style/shop.css">
</head>

<body>
    

    <?php include "templates/nav.php"?>  


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