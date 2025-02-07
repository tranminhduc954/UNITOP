<?php
// Xây dựng form đăng ký và chuẩn hóa dữ liệu bao gồm: username, password, email, phone
// var_dump(realpath('/../Lession/section11/LIB/11.5.Validation-Form.php'));
include '../../section11/LIB/11.5.Validation-Form.php';
function show_array($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
// show_array($_POST);
if (isset($_POST['btn-submit'])) {
    $error = [];
    // Kiểm tra password bằng function is_username
    if (!empty($_POST['username'])) {
        if (!is_username($_POST['username'])) {
            $error['username'] = 'Username không hợp lệ';
        } else {
            $username = $_POST['username'];
        }
    } else {
        $error['username'] = 'Không được để trống thông tin username';
    }
    // Kiểm tra password
    if (!empty($_POST['password'])) {
        if (!is_password($_POST['password'])) {
            $error['password'] = 'Password không hợp lệ';
        } else {
            $password = $_POST['password'];
        }
    } else {
        $error['password'] = 'Không được để trống thông tin password';
    }
    // Chuyển hướng trang vào file index nếu đúng user/pass
    $data = [
        'username' => 'tranminhduc.hbh',
        'password' => 'Hb@123456'
    ];
    if ($username == $data['username'] && $password == $data['password']) {
        header('Location: 12.2.1.index.php');
    } else {
        echo "Đăng nhập không thành công";
    }
    // Kiểm tra email
    if (!empty($_POST['email'])) {
        if (!is_email($_POST['email'])) {
            $error['email'] = 'Email không hợp lệ';
        } else {
            $email = $_POST['email'];
        }
    } else {
        $error['email'] = 'Không được để trống thông tin email';
    }
    // Kiểm tra phone
    if (!empty($_POST['phone'])) {
        if (!is_phone($_POST['phone'])) {
            $error['phone'] = 'Phone không hợp lệ';
        } else {
            $phone = $_POST['phone'];
        }
    } else {
        $error['phone'] = 'Không được để trống thông tin phone';
    }
}
// var_dump(set_error($error, 'username'));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xây dựng form đăng ký tài khoản</title>
</head>

<body>
    <h1>Đăng ký tài khoản</h1>
    <form action="" method="post">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>"><br>
        <p><?php if (isset($_POST['btn-submit'])) {
                echo set_error($error, 'username');
            } ?></p>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>"><br>
        <p><?php if (isset($_POST['btn-submit'])) {
                echo set_error($error, 'password');
            } ?></p>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" value="<?php echo set_value('email'); ?>"><br>
        <p><?php if (isset($_POST['btn-submit'])) {
                echo set_error($error, 'email');
            } ?></p>
        <label for="phone">Phone</label><br>
        <input type="text" name="phone" id="phone" value="<?php echo set_value('phone'); ?>"><br>
        <p><?php if (isset($_POST['btn-submit'])) {
                echo set_error($error, 'phone');
            } ?></p>
        <input type="submit" name="btn-submit" value="Đăng ký">
    </form>
</body>

</html>