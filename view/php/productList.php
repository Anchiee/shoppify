<?php

require "../../model/database/ReadProducts.inc.php";
require "../../configurations/config.inc.php";

print_r(returnProducts($_SESSION["productName"]));