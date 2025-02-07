<?php
session_start();
ob_start();
require_once('./template/temp.php');
require_once('./data/user.php');

// Danh sách các trang hợp lệ
$allowed_pages = ['home', 'login', 'dashboard', 'profile'];

// Kiểm tra biến GET và lọc input
$page = isset($_GET['page']) && in_array($_GET['page'], $allowed_pages) ? $_GET['page'] : 'login';

// Kiểm tra cookie nếu tồn tại thì xác minh tài khoản
if (!empty($_COOKIE['is_login']) && !empty($_COOKIE['user_login'])) {
    $username = $_COOKIE['user_login'];
    $password = $_COOKIE['password'];
    if (check_login($username, $password)) { // Hàm kiểm tra tài khoản có tồn tại không
        $_SESSION['is_login'] = true;
        $_SESSION['user_login'] = $username;
    } else {
        setcookie('is_login', '', time() - 3600, '/'); // Xóa cookie giả mạo
        setcookie('user_login', '', time() - 3600, '/');
    }
}

// Kiểm tra tình trạng login
if (!is_login() && $page != 'login') {
    header("Location: ?page=login");
    exit;
}

// Kiểm tra và gọi file trang
$path = __DIR__ . "/pages/" . basename($page) . ".php";
if (file_exists($path) && in_array($page, $allowed_pages)) {
    require_once $path;
} else {
    echo "Trang không tồn tại!";
}
?>
