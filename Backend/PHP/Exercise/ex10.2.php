<?php
// Bài 2: Lấy dữ liệu từ form đăng ký bao gồm username, password, email, phone, gender
function show_arr($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
// show_arr($_POST);

// if (isset($_POST['btn-register'])) {
//     $user_info = [];
//     $error = [];
//     if (!empty($_POST['fullname']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['phone'])) {
//         $user_info['fullname'] = $_POST['fullname'];
//         $user_info['username'] = $_POST['username'];
//         $user_info['password'] = $_POST['password'];
//         $user_info['email'] = $_POST['email'];
//         $user_info['phone'] = $_POST['phone'];
//         $user_info['gender'] = $_POST['gender'];
//         foreach ($user_info as $key => $value) {
//             // $user_info[$key] = $value;
//             echo "$key: $value <br>";
//         }
//     } else {
//         echo "Không được để trống trường nào";
//     }
// }
// $user_info = ['fullname' => $_POST['fullname'], 'username' => $_POST['username'], 'password' => $_POST['password'], 'email' => $_POST['email'], 'phone' => $_POST['phone']];
// show_arr($user_info);

if (isset($_POST['btn-register'])) {
    $user_info = ['fullname' => $_POST['fullname'], 'username' => $_POST['username'], 'password' => $_POST['password'], 'email' => $_POST['email'], 'phone' => $_POST['phone']];
    $error = [];
    foreach ($user_info as $key => $value) {
        if (empty($value)) {
            // $error[] = $key;
            echo "Không được để trống trường {$key} <br>";
        } else {
            echo "{$key}: {$value} <br>";
        }
        // show_arr($error);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form đăng ký</title>
</head>

<body>
    <h1>Đăng ký tài khoản</h1>
    <form action="" method="POST">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" placeholder="Nhập họ và tên" id="fullname"><br><br>
        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" placeholder="Nhập tên đăng nhập" id="username"><br><br>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" placeholder="Nhập mật khẩu" id="password"><br><br>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Nhập email" id="email"><br><br>
        <label for="phone">Số điện thoại</label>
        <input type="text" name="phone" placeholder="Nhập số điện thoại" id="phone"><br><br>
        <label for="gender">Giới tính</label>
        <input type="radio" name="gender" value="male" id="male" checked="checked">
        <label for="male">Nam</label>
        <input type="radio" name="gender" value="female" id="female">
        <label for="female">Nữ</label>
        <input type="radio" name="gender" value="other" id="other">
        <label for="other">Khác</label><br><br>
        <input type="submit" name="btn-register" value="Đăng ký">
    </form>
</body>

</html>