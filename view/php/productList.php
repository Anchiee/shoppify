<?php

require "../../model/database/ReadProducts.php";
require "../../configurations/config.php";

print_r(returnProducts($_SESSION["productName"]));