
<?php

  require "../../model/database/ReadUsername.php";
  require "../../configurations/config.php";

  set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
  });
  

  try {
    $result = ReadUsername($_SESSION["username"]);
  } catch(Exception $e) {
    echo "You have to log in!";
    die();
  }

  $_SESSION["user-id"] = $result[0]["id"];
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Account info</title>
  <link rel="stylesheet" href="../style/accountInfo.css">
  <link rel="stylesheet" href="../style/header.css">
  <link rel="stylesheet" href="../style/body.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="nav">
      <a href="./register.php" class="nav-options">Sign-in</a>
      <a href="../../controller/UserRedirect.php" class="nav-options">Log-in</a>
      <a href="./about.php" class="nav-options">About</a>
      <a href="./contact.php" class="nav-options">Contact</a>
      <a href="./shop.php" class="nav-options">Shop</a>
      <a href="#" class="nav-options" id="chosen-option">Acccount info</a>
    </div>

    <div class="hamburger-nav">
      <a href="javascript:void(0);" onclick="navManipulation()" id="icon">
        <i class="fa-solid fa-bars fa-2xl" style="color: #c3b1ad;"></i>
      </a>
      <p class="hamburger-header">Shoppify</p>

      <div id="links">
        <a href="./register.php">Sign-in</a>
        <a href="./about.php">About</a>
        <a href="./contact.php">Contact</a>
        <a href="./shop.php">Shop</a>
        <a href="../../controller/UserRedirect.php">Log-in</a> 
      </div>
    </div>

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


<script src="../js/accountInfo.js"></script>
</body>
</html>