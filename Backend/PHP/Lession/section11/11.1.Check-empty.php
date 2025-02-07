<?php
// Chuẩn hóa dữ liệu form
// Kiểm tra dữ liệu rỗng
// Kiểm tra dữ liệu có chứa ký tự đặc biệt không
// Kiểm tra dữ liệu có chứa ký tự số không
// Kiểm tra dữ liệu có chứa ký tự chữ không
// Kiểm tra dữ liệu có chứa ký tự viết hoa không
// Kiểm tra dữ liệu có chứa ký tự viết thường không
// Kiểm tra dữ liệu có chứa ký tự khoảng trắng không
// Kiểm tra dữ liệu có chứa ký tự tab không
// Kiểm tra dữ liệu có chứa ký tự xuống dòng không

function showArr($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
// showArr($_POST);

if (isset($_POST['btn-login'])) {
    $error = array();
    if (empty($_POST['username']) || empty($_POST['password'])) {
        foreach ($_POST as $key => $value) {
            if (empty($value)) {
                $error[$key] = "Dữ liệu " . $key . " không được để trống";
            }
        }
        // showArr($error);
        if (!empty($error)) {
            foreach ($error as $item) {
                // echo $item . "<br>";
            }
        }
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo "<br>";
        echo "Username: " . $username . "<br>";
        echo "Password: " . $password . "<br>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuẩn hóa dữ liệu form đăng nhập</title>
</head>

<body>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" placeholder="Nhập username"><br>
        <p><?php if (!empty($error['username'])) {echo $error['username'];}?></p>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Nhập password"><br>
        <p><?php if (!empty($error['password'])) {echo $error['password'];}?></p>
        <input type="submit" name="btn-login" value="Đăng nhập"><br>
    </form>
</body>

</html>