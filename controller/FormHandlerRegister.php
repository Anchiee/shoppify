<?php



if($_SERVER["REQUEST_METHOD"] == "POST")
{
  require_once "../model/database/CheckUser.php";
  require_once "../model/database/InsertUser.php";

  
  $username = htmlspecialchars($_POST["username"]);
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);


  if(!isset($username) || !isset($password) || !isset($email) || !isset($phone))
  {
    echo "Do not leave the input empty!";
    die();
  }
  else if(strlen($username) <= 3 || strlen($password) <= 7)
  {
    echo "Username/password too short! Username cant be less than 4 characters and password cant be less than 7";
    die();
  }
  else if(userExists($username))
  {
    echo "User already exists";
    die();
  }
  else if(!is_numeric($phone))
  {
    echo "Phone number must be a number";
    die();
  }

  AddUser($username, $password, $email, $phone);
}

