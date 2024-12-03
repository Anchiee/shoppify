<?php


require "../../model/database/ReadProducts.php";
require "../../configurations/config.php";

$productName = $_SESSION["product"];

$result = returnProducts($productName);

print_r($result);