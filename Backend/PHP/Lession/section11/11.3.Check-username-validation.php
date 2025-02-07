<?php
// Ghi lại dữ liệu submit
function show_array($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
show_array($_POST);

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
    if (empty($_POST['email'])) {
        $error['email'] = 'Không được để trống thông tin email'; // Gán lỗi (hạ cờ)
    } else {
        $email = $_POST['email'];
    }
    if (empty($_POST['phone'])) {
        $error['phone'] = 'Không được để trống thông tin phone'; // Gán lỗi (hạ cờ)
    } else {
        $phone = $_POST['phone'];
    }
    if (empty($_POST['gender'])) {
        $error['gender'] = 'Không được để trống thông tin giới tính'; // Gán lỗi (hạ cờ)
    } else {
        $gender = $_POST['gender'];
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
    <h1>Đăng ký User</h1>
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
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" value="<?php if (!empty($email)) {
                                                                echo $email;
                                                            } ?>">
        <p><?php if (!empty($error['email'])) {
                echo $error['email'];
            } ?></p><br>
        <label for="phone">Phone number</label><br>
        <input type="phone" name="phone" id="phone" value="<?php if (!empty($phone)) {
                                                                echo $phone;
                                                            } ?>">
        <p><?php if (!empty($error['phone'])) {
                echo $error['phone'];
            } ?></p><br>
        <select name="gender" id="">
            <option value="">Chọn giới tính</option>
            <option value="male" <?php if (isset($_POST['btn-submit']) && !empty($_POST['gender'])) {
                                        if ($gender == 'male') {
                                            echo "selected='selected'";
                                        }
                                    } ?>>Nam</option>
            <option value="female" <?php if (isset($_POST['btn-submit']) && !empty($_POST['gender'])) {
                                        if ($gender == 'female') {
                                            echo "selected='selected'";
                                        }
                                    } ?>>Nữ</option>
            <option value="other" <?php if (isset($_POST['btn-submit']) && !empty($_POST['gender'])) {
                                        if ($gender == 'other') {
                                            echo "selected='selected'";
                                        }
                                    } ?>>Khác</option>
        </select>
        <p><?php if (!empty($error['gender'])) {
                echo $error['gender'];
            } ?></p><br>
        <input type="submit" name="btn-submit" value="Đăng ký">
    </form>
</body>

</html>