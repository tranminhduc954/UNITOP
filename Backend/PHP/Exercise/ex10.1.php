<?php
// Bài 1: Lấy dữ liệu form đăng nhập bao gồm username và password

if(isset($_POST['btn-login'])){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo "Username: $username <br>";
        echo "Password: $password";
    } else {
        echo "Không được để trống username và password";
    }
        
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form đăng nhập</title>
</head>

<body>
    <h1>Form Login</h1>
    <form action="" method="POST">
        <label for="username">User</label>
        <input type="text" name="username" placeholder="Nhập username" id="username"><br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Nhập password" id="password"><br>
        <input type="submit" name="btn-login" value="Đăng nhập">
    </form>
</body>

</html>