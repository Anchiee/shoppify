<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  require_once "../model/database/UpdateUserData.php";
  require_once "../configurations/config.php";
  require_once "../model/database/ReadProducts.php";

  $username = $_SESSION["username"];

  if(empty($username))
  {
    echo "You have to log in first";
    die();
  }

  $productName = $_POST["product-name"];

  if(productExists($productName))
  {
    echo "product already added to cart";
    die(); 
  }
  
  header("Location: ../view/php/shop.php");
  updateCart($productName);
  die();

}