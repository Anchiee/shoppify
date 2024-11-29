<?php


if($_SERVER["REQUEST_METHOD"] == "POST")
{
  require "../../configurations/config.inc.php";

  session_destroy();
  header("Location: ../../view/php/login.php");
}
