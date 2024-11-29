<?php



function userExists($username)
{
  try{
    require "dbh.inc.php";

    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return !empty($result);

  } catch(PDOException $e) {
    echo "Query failed:" . $e->getMessage();
    die();
  }
}