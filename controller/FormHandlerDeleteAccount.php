<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  require_once "../model/database/DeleteUserData.php";
  header("Location: ../view/php/register.php");
  deleteUserAccount();
}