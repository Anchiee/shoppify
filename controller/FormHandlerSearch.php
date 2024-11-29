<?php


if($_SERVER["REQUEST_METHOD"] == "GET")
{
  $product = htmlspecialchars(strtolower($_GET["search"]));

  require "../configurations/config.inc.php";

  $_SESSION["productName"] = $product;

  header("Location: ../view/php/productList.php");
  die();
}