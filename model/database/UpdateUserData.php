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
    require "dbh.inc.php";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":sessionUsername", $user);
    $stmt->bindParam(":newValue", $newValue);

    $stmt->execute();

    $pdo = null;
    $stmt = null;

  } catch(PDOException $e) {
    echo "Query failed:" . $e->getMessage();
    die();
  }
  


}