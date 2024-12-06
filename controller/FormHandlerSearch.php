<?php


if($_SERVER["REQUEST_METHOD"] == "GET")
{

  require_once "../model/database/ReadProducts.php";
  require_once "../configurations/config.php";

  $product = htmlspecialchars(strtolower($_GET["search"]));

  if(empty($product))
  {
    echo "dont leave the input empty";
    die();
  }

  $_SESSION["product"] = $product;


  header("Location: ../view/php/productList.php");
  die();
}