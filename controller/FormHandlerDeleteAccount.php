<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  require "../model/database/DeleteUserData.php";

  deleteUserAccount();
}