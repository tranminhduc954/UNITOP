<?php
session_start();
unset($_SESSION['isLogin']);
unset($_SESSION['username']);
unset($_SESSION['password']);

header('Location: 12.3.2.login.php');

?>