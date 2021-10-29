<?php

$link=mysqli_connect("localhost", "root", "", "database4gubanov");
$errors = array();
if(isset($_POST['submit']))
{
    $query = mysqli_query($link,"SELECT * FROM `users` WHERE `user_password`='".mysqli_real_escape_string($link,$_POST['password'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    if($data['user_password'] === ($_POST['password']))
    {
        header("Location: dashboard.php"); exit();
    }
    else if (empty($_POST['password'])) {
        array_push($errors, "IS REQUIRED");
    }
    else{
        array_push($errors, "IS WRONG");
    }
}
?>