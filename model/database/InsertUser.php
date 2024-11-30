<?php


function AddUser($username, $password, $email, $phone)
{
  try {

    require "../model/database/dbh.inc.php";
    require_once "../configurations/config.inc.php";

    $query = "INSERT INTO users(username, passwrd, email, phone) VALUES(:username, :passwrd, :email, :phone);";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":passwrd", $password);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":phone", $phone);

    $stmt->execute();

    $_SESSION["username"] = $username;

    $stmt = null;
    $pdo = null;

    header("Location: ../view/php/accountInfo.php");
    die();

  } catch(PDOException $e) {
    echo "Query failed:" . $e->getMessage();
    die();
  }
}