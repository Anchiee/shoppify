<?php



if($_SERVER["REQUEST_METHOD"] == "POST")
{
  require_once "../model/database/CheckUser.php";
  require_once "../model/database/InsertUser.php";
  require_once "../configurations/config.php";

  
  $username = htmlspecialchars($_POST["username"]);
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);


  if(!isset($username) || !isset($password) || !isset($email) || !isset($phone))
  {
    $_SESSION["error-info"] = "Do not leave the input empty!";
    header("Location: ../view/php/errors/LoginError.php");
    die();
  }
  else if(strlen($username) <= 3 || strlen($password) <= 7)
  {
    $_SESSION["error-info"] = "Username/password too short! Username cant be less than 4 characters and password cant be less than 7";
    header("Location: ../view/php/errors/LoginError.php");
    die();
  }
  else if(userExists($username))
  {
    $_SESSION["error-info"] = "User already exists";
    header("Location: ../view/php/errors/LoginError.php");
    die();
  }
  else if(!is_numeric($phone))
  {
    $_SESSION["error-info"] = "Phone number must be a number";
    header("Location: ../view/php/errors/LoginError.php");
  }

  AddUser($username, $password, $email, $phone);
}

