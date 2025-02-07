<?php
session_start();

// $_SESSION['isLogin'] = true;
// $_SESSION['username'] = 'admin';
// $_SESSION['password'] = 'admin123';

// header('Location: 12.3.1.index.php');
// print_r($_SESSION);

// print_r($_POST);
function redirect_to($file)
{
    header("Location: $file");
    exit();
}

if (isset($_POST['btn-submit'])) {
    $error = []; // Khai báo mảng lưu lỗi (đặt cờ)
    if (empty($_POST['username'])) {
        $error['username'] = 'Không được để trống thông tin username'; // Gán lỗi (hạ cờ)
    } else {
        // $username = $_POST['username'];
        $partten = '/^[A-Za-z0-9_\.]{6,32}$/';
        if (strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32) {
            if (!preg_match($partten, $_POST['username'])) {
                $error['username'] = 'Username không hợp lệ';
            } else {
                $username = $_POST['username'];
            }
        } else {
            $error['username'] = 'Username phải từ 6 đến 32 ký tự';
        }
    }
    if (empty($_POST['password'])) {
        $error['password'] = 'Không được để trống thông tin password'; // Gán lỗi (hạ cờ)
    } else {
        $password = $_POST['password'];
    }
    $data = [
        'username' => 'tranminhduc.hbh',
        'password' => 'Hb@123456'
    ];
    if (isset($username) && isset($password)) {
        if ($username == $data['username'] && $password == $data['password']) {
            if (isset($_POST['remember'])) {
                setcookie('is_login', true, time() + 3600, '/');
                setcookie('username', $username, time() + 3600, '/');
                setcookie('password', $password, time() + 3600, '/');
            }
            $_SESSION['isLogin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            // header('Location: 12.3.1.index.php');
            redirect_to('12.3.1.index.php');
        } else {
            echo "Đăng nhập thất bại";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghi lại dữ liệu form submit</title>
</head>

<body>
    <h1>LOGIN</h1>
    <form action="" method="post">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" value="<?php if (!empty($username)) {
                                                                    echo $username;
                                                                } ?>">
        <p><?php if (!empty($error['username'])) {
                echo $error['username'];
            } ?></p><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" value="<?php if (!empty($password)) {
                                                                        echo $password;
                                                                    } ?>">
        <p><?php if (!empty($error['password'])) {
                echo $error['password'];
            } ?></p><br>
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Ghi nhớ đăng nhập</label><br><br>
        <input type="submit" name="btn-submit" value="Đăng ký">
    </form>
</body>

</html>