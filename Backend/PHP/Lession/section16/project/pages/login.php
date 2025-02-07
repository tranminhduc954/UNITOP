<div id="content">
    <h1>Đăng nhập</h1>
    <form action="" method="post">
        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit" name="login">Đăng nhập</button>
    </form>
</div>
<?php
$path = __DIR__ . "/../template/temp.php"; // Đường dẫn tuyệt đối đến file temp.php
require_once($path);

show_array($_POST);

// Kiểm tra xem người dùng đã click vào nút đăng nhập chưa
if (isset($_POST['login'])) {
    // Xử lý validate form
    $errors = []; // Mảng chứa lỗi
    if (empty($_POST['username'])) {
        $errors['username_null'] = "Tên đăng nhập không được để trống";
    } else {
        $partten_username = '/^[A-Za-z0-9_\.]{6,32}$/';
        if (strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32) {
            if (!preg_match($partten_username, $_POST['username'])) {
                $errors['username_type'] = 'Username không hợp lệ';
            }
        } else {
            $errors['username_leng'] = 'Username phải từ 6 đến 32 ký tự';
        }
    }
    if (empty($_POST['password'])) {
        $errors['password_null'] = "Mật khẩu không được để trống";
    } else {
        $partten_password = '/^[A-Za-z\d@$!%*?&]{8,}$/';
        if (strlen($_POST['password']) >= 6 && strlen($_POST['password']) <= 32) {
            if (!preg_match($partten_password, $_POST['password'])) {
                $errors['password_type'] = 'Password phải chứa ít nhất 8 ký tự bắt đầu bằng Chữ in hoa, bao gồm chữ cái thường, số và ký tự đặc biệt';
            }
        } else {
            $errors['password_leng'] = 'Password phải từ 6 đến 32 ký tự';
        }
    }
    // Nếu không có lỗi thì gán dữ liệu vào biến
    if (empty($errors)) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
    show_array($errors);
}

?>