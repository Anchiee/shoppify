<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{

  require_once "../model/database/UpdateUserData.php";
  require_once "../configurations/config.php";

  $newVal = htmlspecialchars($_POST["new-value"]);
  $field = $_POST["field"];

  if(empty($newVal)) 
  {
    $_SESSION["error-info"] = "Empty input try again";
    header("Location: ../view/php/errors/LoginError.php");
    die();
  }
  else if($newVal == "passwrd" && strlen($newVal) <= 7)
  {
    $_SESSION["error-info"] = "Password too short! Password cant be less than 7";
    header("Location: ../view/php/errors/LoginError.php");
    die();
  }
  
  updateUser($field, $newVal);

  header("Location: ../view/php/accountInfo.php");
  die();

}