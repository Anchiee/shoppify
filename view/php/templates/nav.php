
<div class="nav">
  <a href="./register.php" class="nav-options" id="<?php basename($_SERVER["PHP_SELF"]) === "register.php" ? "chosen-option" : ""?>">Sign-in</a>
  <a href="../../controller/UserRedirect.php" class="nav-options" id="<?php basename($_SERVER["PHP_SELF"]) === "login.php" ? "chosen-option" : ""?>">Log-in</a>
  <a href="./about.php" class="nav-options" id="<?php basename($_SERVER["PHP_SELF"]) === "about.php" ? "chosen-option" : ""?>">About</a>
  <a href="./shop.php" class="nav-options" id="<?php basename($_SERVER["PHP_SELF"]) === "shop.php" ? "chosen-option" : ""?>">Shop</a>
  <a href="./accountInfo.php" class="nav-options" id="<?php basename($_SERVER["PHP_SELF"]) === "accountInfo.php" ? "chosen-option" : ""?>">Acccount info</a>
</div>

<div class="hamburger-nav">
  <a href="javascript:void(0);" onclick="navManipulation()" id="icon">
    <i class="fa-solid fa-bars fa-2xl" style="color: #c3b1ad;"></i>
  </a>
  <p class="hamburger-header">Shoppify</p>

  <div id="links">
    <a href="./register.php">Sign-in</a>
    <a href="./about.php">About</a>
    <a href="./shop.php">Shop</a>
    <a href="../../controller/UserRedirect.php">Log-in</a> 
  </div>
</div>


