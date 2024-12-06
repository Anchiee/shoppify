<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  require "../configurations/config.php";
  require "../model/database/DeleteUserData.php";

  $userId = $_SESSION["user-id"];
  $id = $_POST["product-id"];

  deleteFromCart($id, $userId);
  header("Location: ../view/php/userCart.php");
  die();
}