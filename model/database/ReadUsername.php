<?php


function ReadUsername($username)
{
  try {

    require_once "dbh.php";

    $query = "SELECT * FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmt = null;

    return $result;


  } catch(PDOException $e) {
    return "Query failed:" . $e->getMessage();
  }
}