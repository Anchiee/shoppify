<?php

function returnProducts($productName)
{
  try {

    require "dbh.php";

    $query = "SELECT id, productName, company FROM products WHERE productName = :productName OR company = :productName 
    OR id = :productName;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":productName", $productName);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmt = null;

    return $result;

  } catch(PDOException $e) {
    echo "Query failed:" . $e->getMessage();
    return " ";
  }
}