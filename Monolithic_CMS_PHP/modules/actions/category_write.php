<?php

require_once "../general/database.php";

$connect = new Database();
$connect->add_data("INSERT INTO `category` (`id`, `name`) VALUES (NULL, '". $_POST["category_name"] ."')");
header('Location: ../../category_management.php');