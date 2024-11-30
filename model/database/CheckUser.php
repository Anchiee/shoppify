<?php



function userExists($username)
{
  try{
    require "dbh.php";

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

function checkPassword($usernamePOST, $passwordPOST)
{
  try {
    require "dbh.php"; 

    $query = "SELECT username, passwrd FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username",$usernamePOST);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = null;
    $pdo = null;

    return $usernamePOST && password_verify($passwordPOST, $result[0]["passwrd"]);


  } catch(PDOException $e) {
    echo "Query failed:" . $e->getMessage();
    die();
  } catch(Exception $e) {
    echo "Wrong username/password";
    die();
  }
}