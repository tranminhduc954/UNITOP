<?php
session_start();

setcookie('is_login', true, time() - 3600, '/');
setcookie('username', $username, time() - 3600, '/');
setcookie('password', $password, time() - 3600, '/');

unset($_SESSION['isLogin']);
unset($_SESSION['username']);
unset($_SESSION['password']);

// header('Location: 12.3.2.login.php');

function redirect_to($file)
{
    header("Location: $file");
    exit();
}
redirect_to('12.3.2.login.php');