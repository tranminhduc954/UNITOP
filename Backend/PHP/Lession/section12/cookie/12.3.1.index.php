<?php
// echo "Đây là trang chủ";

session_start();

function show_array($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
function redirect_to($file)
{
    header("Location: $file");
    exit();
}
// show_array($_SESSION);
if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true) {
    echo "Xin chào " . $_SESSION['username']."<br>";
    echo "<a href='12.3.3.logout.php'>Logout</a>"."<br>";
    echo $_COOKIE['username']."<br>";
    echo $_COOKIE['password']."<br>";
} else {
    echo "Bạn chưa đăng nhập"."<br>";
    echo "<a href='12.3.2.login.php'>Login</a>";
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trang Chủ</h1>
</body>
</html>