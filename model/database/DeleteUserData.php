<?php


function deleteUserAccount()
{
  try {

    require "dbh.php";
    require "../../configurations/config.php";

    $username = $_SESSION["username"];

    $query = "DELETE FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $stmt = null;
    $pdo = null;

    session_destroy();

    header("Location: ../../view/php/register.php");
    
    die();
    
  } catch(PDOException $e) {
    return "Query failed:" . $e->getMessage();
  }
}


function deleteFromCart($productId, $userId)
{
  require "dbh.php";


  try {

    $query = "DELETE FROM cart WHERE product_id = :productId AND user_id = :userId;";

    $stmt = $pdo->prepare($query);


    $stmt->bindParam(":productId", $productId);
    $stmt->bindParam(":userId", $userId);

    if (!$stmt->execute()) {
      print_r($stmt->errorInfo());
  }

    $stmt = null;
    $pdo = null;


  } catch(PDOException $e) {
    return $e->getMessage();
  }

}