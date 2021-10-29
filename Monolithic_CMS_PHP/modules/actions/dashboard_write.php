<?php

require_once "../general/database.php";

$connect = new Database();
$connect->add_data("INSERT INTO `dashboard` (`id`, `name`, `email`, `category`, `note`) VALUES 
(NULL, '". $_POST["full_name"] ."', '". $_POST["email"] ."', '". $_POST["options"] ."', '". $_POST["note"] ."')");
    header('Location: ../../dashboard.php');