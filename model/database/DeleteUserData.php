<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
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