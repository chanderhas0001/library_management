<?php

require_once ('dao.php');


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $row = selectByCondition("users", "username='$username' and userpassword='$password'");
    // print_r($row);

    if($row){
        session_start();
        $_SESSION['user'] = $username;
        header("location:index.php");

        // print_r($_SESSION);

    } else {
        header("location:login.php?error=invalid user and password");
    }
}
?>