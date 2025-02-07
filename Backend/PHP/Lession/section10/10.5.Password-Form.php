<?php
// Nhận dữ liệu từ textbox
// Sử dụng phương thức POST
// Sử dụng biến $_POST
// Sử dụng hàm isset() để kiểm tra xem biến có tồn tại hay không
// Sử dụng hàm empty() để kiểm tra xem biến có rỗng hay không
// Sử dụng hàm trim() để loại bỏ khoảng trắng ở đầu và cuối chuỗi
// Sử dụng hàm htmlspecialchars() để chuyển các ký tự đặc biệt thành mã HTML
// Sử dụng hàm stripslashes() để loại bỏ các ký tự \ trong chuỗi
// Sử dụng hàm filter_var() để kiểm tra xem biến có phải là email hay không

function show_arr($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
// show_arr($_SERVER);
function get_user_info($data) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // echo $username = $_POST['username'].'<br>';
        if (empty($_POST['username'] || empty($_POST['password']))) {
            echo "Không được để trống trường username hoặc password";
        } else {
            $username = $_POST["username"].'<br>';
            $password = $_POST["password"].'<br>';
            echo $username;
            echo $password;
        }
    }
}

get_user_info($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy dữ liệu từ textbox</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Username</label>
        <input type="text" name="username" id=""><br><br>
        <label for="">Password</label>
        <input type="password" name="password" id=""><br><br>
        <input type="submit" name="btn-login" value="Login">
    </form>
</body>
</html>