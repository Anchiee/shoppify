<?php

function returnProducts($productName)
{
  try {

    require "dbh.php";

    $query = "SELECT * FROM products WHERE productName = :productName OR company = :productName 
    OR id = :productName;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":productName", $productName);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmt = null;

    return $result;

  } catch(PDOException $e) {
    return "Query failed:" . $e->getMessage();
  }
}


function returnCart()
{
  try {

    require "dbh.php";
    require "../../configurations/config.php";

    $userId = $_SESSION["user-id"];

    $query = "SELECT * FROM cart WHERE user_id = :userId;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":userId", $userId);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmt = null;

    return $result;

  } catch(PDOException $e) {
    return "Query failed:" . $e->getMessage();
  }
  
}