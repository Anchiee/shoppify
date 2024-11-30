<?php

ini_set("session.use_strict_mode" , 1);
ini_set("session.use_only_cookies" , 1);

session_set_cookie_params([
  "lifetime" => 1800,
  "secure" => true,
  "httponly" => true,
  "path" => "/",
  "domain" => "localhost" 
]);

session_start();

if(!isset($_SESSION["last-regeneration"]))
{
  session_regenerate_id(true);
  $_SESSION["last-regeneration"] = time();
}
else
{
  $interval = 60 * 30;

  if(time() - $_SESSION["last-regeneration"]  >= $interval)
  {
    $_SESSION["last-regeneration"] = time();
    session_regenerate_id(true);
  }
}