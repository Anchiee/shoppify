<?php


if($_SERVER["REQUEST_METHOD"] == "POST")
{
  require_once "../../configurations/config.php";

  session_destroy();
  header("Location: ../../view/php/login.php");
}
