<?php
require_once __DIR__ . '/../data/user.php';
require_once __DIR__ . '/../template/temp.php';
if (isset($_POST['btn-login'])) {
    $error = [];
    // Kiểm tra username
    if (empty($_POST['username'])) {
        $error['username'] = "Username không được để trống";
    } else {
        $pattern = "/^[a-zA-Z0-9]{6,}$/";
        if (!preg_match($pattern, $_POST['username'])) {
            $error['username'] = "Username phải lớn hơn 6 ký tự và không chứa ký tự đặc biệt";
        }
    }
    // Kiểm tra password
    if (empty($_POST['password'])) {
        $error['password'] = "Password không được để trống";
    } else {
        $pattern = "/^[a-zA-Z0-9]{6,}$/";
        if (!preg_match($pattern, $_POST['password'])) {
            $error['password'] = "Password phải lớn hơn 6 ký tự và không chứa ký tự đặc biệt";
        }
    }
    // Nếu không có lỗi thì thực hiện đăng nhập
    if (empty($error)) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (check_login($username, $password)) {
            // Lưu thông tin người dùng vào session
            $_SESSION['user_login'] = $username;
            $_SESSION['is_login'] = true;

            // Nếu người dùng chọn ghi nhớ đăng nhập thì tạo cookie
            if (isset($_POST['remember'])) {
                setcookie('is_login', true, time() + 3600, '/');
                setcookie('user_login', $username, time() + 3600, '/');
                setcookie('password', $password, time() + 3600, '/');

            }

            // Chuyển hướng về trang chủ
            header("Location: ?page=home");
        } else {
            $error['login'] = "Username hoặc password không đúng";
        }
    }
    show_array($error);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form đăng nhập</title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <div id="wp-form-login">
        <h1 id="head-form-login">ĐĂNG NHẬP</h1>
        <form id="form-login" action="" method="POST">
            <input type="text" id="username" name="username" value="" placeholder="Tên đăng nhập">
            <input type="password" id="password" name="password" value="" placeholder="Mật khẩu">
            <label for="remember">Ghi nhớ đăng nhập</label>
            <input type="checkbox" id="remember" name="remember">
            <input type="submit" name="btn-login" value="Đăng nhập">
        </form>
        <a id="forgot-password" href="">Quên mật khẩu?</a>
    </div>
</body>

</html>