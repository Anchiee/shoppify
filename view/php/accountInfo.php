
<?php

  require "../../model/database/ReadUsername.php";
  require "../../configurations/config.php";

  set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
  });
  

  try {
    $result = ReadUsername($_SESSION["username"]);
  } catch(Exception $e) {
    $_SESSION["error-info"] = "You have to log in";
    header("Location: error/Error.php");
    die();
  }

  $_SESSION["user-id"] = $result[0]["id"];

  $title = "Account info";
  
?>



<!DOCTYPE html>
<html lang="en">
<head>

  <?php include "templates/head.php"?>
  <link rel="stylesheet" href="../style/accountInfo.css">
  <link rel="stylesheet" href="../style/header.css">
  <link rel="stylesheet" href="../style/body.css">
</head>
<body>

  <nav>
    <?php include "templates/nav.php"?>
  </nav>

  <main>
    <div class="account-info-container">
        
      <div class="inner-info-container">
          <h1>USERNAME</h1>
          <p class="info"> <?php echo $result[0]["username"]; ?> </p>
          <button class="change-button" onclick="showUsername()">
            <i class="fa-regular fa-pen-to-square fa-2xl" class="icon"></i>
          </button>
          <input type="hidden" name="username" value="username">
        </div>
        
        <div class="inner-info-container">
          <h1>PASSWORD</h1>
          <p class="info"><?php echo "********"?> </p>
          <button class="change-button" onclick="showPassword()">
            <i class="fa-regular fa-pen-to-square fa-2xl" class="icon"></i>
          </button>
        </div>
        
        <div class="inner-info-container">
          <h1>EMAIL</h1>
          <p class="info"><?php echo $result[0]["email"]?> </p>
          <button class="change-button" onclick="showEmail()">
            <i class="fa-regular fa-pen-to-square fa-2xl" class="icon"></i>
          </button>
        </div>
        
        <div class="inner-info-container">
          <h1>PHONE NUMBER</h1>
          <p class="info" id="last"><?php echo $result[0]["phone"]?> </p>
          <button class="change-button" onclick="showPhone()">
          <i class="fa-regular fa-pen-to-square fa-2xl" class="icon"></i>
          </button>
            
          
            <button class="manipulate-button" id="cart" onclick="redirectToCart()">
              Cart
            </button>
        </div>
        
        <div class="buttons-container">
          
          <form action="../../model/database/LogOutUser.php" method="post" class="manipulate-form">
            <button class="manipulate-button">
              Log out
            </button>
          </form>
          
          <form action="../../controller/FormHandlerDeleteAccount.php" method="post" class="manipulate-form">
            <button class="manipulate-button" id="delete-account">
              Delete
            </button>
          </form>
        
        </div>

      </div>
    </div>

    <form action="../../controller/FormHandlerUpdate.php" method="post" class="change-form" id="change-username-form">
      
      <input type="text" name="new-value" placeholder="New username">
      <input type="hidden" name="field" value="username">
      
      <div class="change-buttons-container">
        <button class="manipulate-button">
          Save
        </button>
        
        <button type="button" class="close-button" onclick="hideUsername()">
          Close
        </button>
      </div>
    </form>


    <form action="../../controller/FormHandlerUpdate.php" method="post" class="change-form" id="change-password-form">
      
      <input type="password" name="new-value" placeholder="New password">
      <input type="hidden" name="field" value="passwrd">
      

      <div class="change-buttons-container">
        <button class="manipulate-button">
          Save
        </button>
        
        <button type="button" class="close-button" onclick="hidePassword()">
          Close
        </button>
      </div>
    
    </form>

    
    <form action="../../controller/FormHandlerUpdate.php" method="post" class="change-form" id="change-email-form">
      
      <input type="email" name="new-value" placeholder="New email">
      <input type="hidden" name="field" value="email">
      
      <div class="change-buttons-container">

        <button class="manipulate-button" onclick="showEmail()">
          Save
        </button>
        
        
        <button type="button" class="close-button" onclick="hideEmail()">
          Close
        </button>

      </div>
      
    
    </form>

    
    <form action="../../controller/FormHandlerUpdate.php" method="post" class="change-form" id="change-phone-form">
      
      <input type="text" name="new-value" placeholder="New phone number">
      <input type="hidden" name="field" value="phone">
      
      <div class="change-buttons-container">

        <button class="manipulate-button" onclick="showPhone()">
          Save
        </button>
        
        <button type="button" class="close-button" onclick="hidePhone()">
          Close
        </button>
      </div>
      
      
    
    </form>
  </main>


<script src="../js/accountInfo.js"></script>
<script src="../js/hamburgerMenu.js"></script>
</body>
</html>