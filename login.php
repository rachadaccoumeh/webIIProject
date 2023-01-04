<?php
require_once 'inc/inc.php';
if (isset($_POST['full_name'])) {
    unset($_COOKIE['user_id']);
    $username = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT INTO users(user_name, users_email, users_password, user_permission) values ('$username','$email','$password',FALSE)";
    try {
        $db->query($query)->fetch();
    } catch (Exception $e) {
        echo "<script>alert('Email address already exists');</script>";
    }
    header("Location: login.php?t=login");
} elseif (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE users_email='$email' AND users_password='$password'";
    $userInfo = $db->query($query)->fetch();
    $id = $userInfo['id'];
    $username = $userInfo['user_name'];
    if ($userInfo) {
        if ($_POST['remember'] == "on")
            setcookie("user_id", $id, time() + (86400 * 30), "/");
        else
            setcookie("user_id", $id, time() + (60 * 10), "/");
        header("Location: index.php");
    } else {
        echo "<script>alert('Wrong Email address or Password');</script>";
        include "public/partial/login.php";

    }


} elseif (isset($_GET['t'])) {
    if ($_GET['t'] == "login") {
        include "public/partial/login.php";
    }

} else {
    include "public/partial/register.php";
}


