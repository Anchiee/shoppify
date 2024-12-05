<?php

require "../../model/database/ReadProducts.php";


if(empty(returnCart()))
{
  echo "you dont have any products added";
}
else
{
  print_r(returnCart());
}
