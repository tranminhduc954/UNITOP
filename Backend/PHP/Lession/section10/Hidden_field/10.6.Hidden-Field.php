<?php
// Nhận dữ liệu từ hidden field
// Sử dụng phương thức POST
// Sử dụng biến $_POST
// Sử dụng hàm isset() để kiểm tra xem biến có tồn tại hay không
// Sử dụng hàm empty() để kiểm tra xem biến có rỗng hay không
// Sử dụng hàm trim() để loại bỏ khoảng trắng ở đầu và cuối chuỗi
// Sử dụng hàm htmlspecialchars() để chuyển các ký tự đặc biệt thành mã HTML
// Sử dụng hàm stripslashes() để loại bỏ các ký tự \ trong chuỗi
// Sử dụng hàm filter_var() để kiểm tra xem biến có phải là email hay không

// VD: Làm bài toán kiểm tra đăng nhập nếu đúng user-pass thì chuyển hướng vào trang home.php
// B1: Kiểm tra xem có dữ liệu được gửi đi hay không;
// B2: Kiểm tra xem dữ liệu được gửi đi có rỗng hay không;
// B3: Lấy dữ liệu từ form
// B4: Kiểm tra xem dữ liệu có đúng hay không
// B5: Chuyển hướng trang

if (isset($_POST['btn-login'])) { // Kiểm tra xem có dữ liệu được gửi đi hay không
    $error = []; // Mảng lưu lỗi
    if (empty($_POST['username']) || empty($_POST['password'])) { // Kiểm tra xem dữ liệu được gửi đi có rỗng hay không
        $error[] = "Không được để trống trường username hoặc password";
    } else { // Lấy dữ liệu từ form
        $username = $_POST["username"];
        $password = $_POST["password"];
        $user_data = array( // Giả sử user đăng nhập lấy từ DB
            'id' => 1,
            'username' => 'tranminhduc.hbh',
            'password' => 'Hbh@123456'
        );
        if (($username == $user_data['username']) && ($password == $user_data['password'])) { // Kiểm tra xem dữ liệu có đúng hay không
            if (empty($error)) {
                header('Location: home.php');
                exit;
                // echo $_POST['redirect_to'];
            }
        } else {
            $error[] = "Sai tên đăng nhập hoặc mật khẩu";
        }
    }
    if (!empty($error)) {
        echo "<ul>";
        foreach ($error as $err) {
            echo "<li>" . htmlspecialchars($err) . "</li>";
        }
        echo "</ul>";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dữ liệu tử Hidden Field</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">Username</label>
        <input type="text" name="username" id=""><br><br>
        <label for="">Password</label>
        <input type="password" name="password" id=""><br><br>
        <input type="hidden" name="redirect_to" value="">
        <input type="submit" name="btn-login" value="Login">
    </form>
</body>

</html>