<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  require_once "../model/database/UpdateUserData.php";
  require_once "../configurations/config.php";

  $username = $_SESSION["username"];

  if(empty($username))
  {
    echo "You have to log in first";
    die();
  }

  $productName = $_POST["product-name"];
  updateCart($productName);

  header("Location: ../view/php/shop.php");
  die();

}