<?php



if($_SERVER["REQUEST_METHOD"] == "POST")
{


  set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
  });
  


  $usernamePOST = $_POST["username"];
  $passwordPOST = $_POST["password"];

  try {
    require "../model/database/dbh.inc.php";
    require "../configurations/config.inc.php";

    $query = "SELECT username, passwrd FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username",$usernamePOST);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = null;
    $pdo = null;

    if($usernamePOST && password_verify($passwordPOST, $result[0]["passwrd"]))
    {
      $_SESSION["username"] = $usernamePOST;
      header("Location: ../view/php/accountInfo.php");
      die();
    }
  } catch(PDOException $e) {
    echo "Query failed:" . $e->getMessage();
    die();
  } catch(Exception $e) {
    echo "Wrong username/password";
    die();
  }
}