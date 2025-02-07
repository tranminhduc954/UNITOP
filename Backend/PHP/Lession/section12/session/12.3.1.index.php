<?php
// echo "Đây là trang chủ";

session_start();

function show_array($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
// show_array($_SESSION);
if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true) {
    echo "Xin chào " . $_SESSION['username']."<br>";
    echo "<a href='12.3.3.logout.php'>Logout</a>";
} else {
    echo "Bạn chưa đăng nhập"."<br>";
    echo "<a href='12.3.2.login.php'>Login</a>";
}




?>