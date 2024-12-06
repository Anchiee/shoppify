<?php


function updateUser($field, $newValue)
{
  session_start();


  $user = $_SESSION["username"];
  $query = "";

  switch($field)
  {
    case "username":
      $query = "UPDATE users SET username = :newValue WHERE username = :sessionUsername;";
      $_SESSION["username"] = $newValue;
      break;
    case "passwrd":
      $newValue = password_hash($newValue, PASSWORD_DEFAULT);
      $query = "UPDATE users SET passwrd = :newValue WHERE username = :sessionUsername;";
      break;
    case "email":
      $query = "UPDATE users SET email = :newValue WHERE username = :sessionUsername;";
      break;
    case "phone":
      $query = "UPDATE users SET phone = :newValue WHERE username = :sessionUsername;";
      break;
  }


  try
  {
    require "../model/database/dbh.php";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":sessionUsername", $user);
    $stmt->bindParam(":newValue", $newValue);

    $stmt->execute();

    $pdo = null;
    $stmt = null;

  } catch(PDOException $e) {
    return "Query failed:" . $e->getMessage();
  }
  
}


function updateCart($productName)
{
  require "dbh.php";
  require_once "ReadProducts.php";
  require "../configurations/config.php";

  try {
    $username = $_SESSION["username"];

    $query = "SELECT id FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $productId = returnProducts($productName);

    $query = "INSERT INTO cart(user_id, product_id, productName) VALUES(:user_id, :product_id, :productName);";
    $stmt = $pdo->prepare($query);



    $stmt->bindParam(":user_id", $result["id"]);
    $stmt->bindParam(":product_id", $productId[0]["id"]);
    $stmt->bindParam(":productName", $productName);
    $stmt->execute();

    $pdo = null;
    $stmt = null;

    $_SESSION["user-id"] = $result["id"];
    die();

  } catch(PDOException $e) {
    return "Query failed:" . $e->getMessage();
  }

}