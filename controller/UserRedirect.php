<?php


require_once "../configurations/config.php";

isset($_SESSION["username"]) ? header("Location: ../view/php/accountInfo.php") : header("Location: ../view/php/login.php");