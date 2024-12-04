<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{

  require_once "../model/database/UpdateUserData.php";

  $newVal = htmlspecialchars($_POST["new-value"]);
  $field = $_POST["field"];

  if(empty($newVal)) 
  {
    echo "empty input try again";
    die();
  }
  else if($newVal == "passwrd" && strlen($newVal) <= 7)
  {
    echo "Password too short! Password cant be less than 7";
    die();
  }
  
  updateUser($field, $newVal);

  header("Location: ../view/php/accountInfo.php");
  die();

}