<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  try {

    require "dbh.inc.php";
    require "../../configurations/config.inc.php";

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
    echo "Query failed:" . $e->getMessage();
    die();
  }
}