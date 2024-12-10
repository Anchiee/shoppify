<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  require_once "../model/database/UpdateUserData.php";
  require_once "../configurations/config.php";
  require_once "../model/database/ReadProducts.php";

  $username = $_SESSION["username"];

  if(empty($username))
  {
    $_SESSION["error-info"] = "You have to log in first";
    header("Location: ../view/php/error/Error.php");
    die();
  }

  $productName = $_POST["product-name"];

  if(productExists($productName))
  {
    $_SESSION["error-info"] = "Product already added to the cart";
    header("Location: ../view/php/error/Error.php");
    die(); 
  }
  
  header("Location: ../view/php/shop.php");
  updateCart($productName);
  die();

}