<?php


set_error_handler(function ($errno, $errstr, $errfile, $errline) {
  throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
});

try {

  require "../../model/database/ReadProducts.php";

  $result = returnCart();

} catch(Exception $e) {
  echo "You dont have any products";
  die();
}

$title = "Cart";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "templates/head.php"?>
  <link rel="stylesheet" href="../style/header.css">
  <link rel="stylesheet" href="../style/body.css">
  <link rel="stylesheet" href="../style/productList.css">
</head>

<body>
  <nav>
    <?php include "templates/nav.php"?>
  </nav>

  <main>

    <?php

      $cartProducts = array();
      foreach($result as $column)
      {
        array_push($cartProducts, $column["productName"]);
      }


      $result = array();
      foreach($cartProducts as $index)
      {
        array_push($result, returnProducts($index));
      }

      
      $flattenedResult = [];

      foreach($result as $key)
      {
        if(isset($key[0]))
        {
          $flattenedResult[] = $key[0];
        }
        
      }
      ?>


    <div class="container">
      <?php

      foreach($flattenedResult as $column)
        {
          echo "<form action='../../controller/FormHandlerDeleteFromCart.php' method='post' class='product-container'>"; 
          foreach($column as $row => $value)
          { 
            if($row == "id")
            {
              echo "<p>ID: $value</p>
              <input type='hidden' name='product-id' value='$value'>";
              continue;
            }
            if($row == "productName")
            {
              echo "<h1>$value</h1>";
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

          echo "<button class='check-out'>
          <i class='fa-solid fa-trash-can fa-xl'></i>
          </button>";

          echo "</form>";
        }
        ?>
  

    </div>
  </main>


    
  

<script src="../js/hamburgerMenu.js"></script>
</body>
</html>
