<?php



if($_SERVER["REQUEST_METHOD"] == "POST")
{

  require_once "../model/database/CheckUser.php";
  require_once "../configurations/config.php";
  
  $usernamePOST = htmlspecialchars($_POST["username"]);
  $passwordPOST = htmlspecialchars($_POST["password"]);

  if(empty($usernamePOST) || empty($passwordPOST))
  {
    echo "empty input";
    die();
  }

  else if(checkPassword($usernamePOST, $passwordPOST))
  {
    $_SESSION["username"] = $usernamePOST;
    header("Location: ../view/php/accountInfo.php");
    die();
  }
  else
  {
    $_SESSION["error-info"] = "Wrong password/username";
    header("Location: ../view/php/error/Error.php");
    die();
  }
 
}