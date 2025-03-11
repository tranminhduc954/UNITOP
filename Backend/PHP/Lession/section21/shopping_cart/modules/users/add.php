<?php
get_header();
// Kết nối luôn database ở index

if (isset($_POST['btn_reg'])) {
    $error = [];
    $alert = [];
    // Kiểm tra fullname
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Không được để trống fullname";
    } else {
        $fullname = trim(htmlspecialchars($_POST['fullname']));
    }
    // Kiểm tra giới tính
    if (empty($_POST['gender'])) {
        $error['gender'] = "Bạn cần chọn giới tính";
    } else {
        $gender = $_POST['gender'];
    }
    // Kiểm tra username
    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống username";
    } else {
        $pattern = "/^(?![._-])[a-zA-Z0-9._-]{6,32}$/"; // Sửa regex
        if (!preg_match($pattern, $_POST['username'])) {
            $error['username'] = "Tên đăng nhập không đúng định dạng";
        } else {
            $username = trim(htmlspecialchars($_POST['username']));
        }
    }
    // Kiểm tra password
    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống password";
    } else {
        $pattern = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*?&]{6,32}$/";
        if (!preg_match($pattern, $_POST['password'])) {
            $error['password'] = "Mật khẩu không đúng định dạng";
        } else {
            // $password = $_POST['password'];
            $password = md5($_POST['password']); // Mã hóa mật khẩu trước khi lưu
        }
    }
    // Kiểm tra email
    if (empty($_POST['email'])) {
        $error['email'] = "Không được để trống email";
    } else {
        $pattern = "/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/";
        if (!preg_match($pattern, $_POST['email'])) {
            $error['email'] = "Email không đúng định dạng";
        } else {
            $email = trim(htmlspecialchars($_POST['email']));
        }
    }
    // Kết luận
    if (empty($error)) {
        $sql = "INSERT INTO `tbl_users` (`fullname`, `username`, `password`, `email`, `gender`)"
            . "VALUES ('{$fullname}', '{$username}', '{$password}', '{$email}', '{$gender}')";
        if (mysqli_query($conn, $sql)) {
            $alert['success'] = "Thêm dữ liệu thành công";
        } else {
            echo "Lỗi".mysqli_error($conn);
        }
    } else {
        // show_array($error);
    }
}
?>

<div id="content">
    <style>
        #form_reg {
            width: 250px;
        }

        label {
            display: block;
            margin: 0px 0px 5px 0px;
        }

        input {
            display: block;
            margin-bottom: 10px;
        }

        input[type='text'],
        input[type='email'],
        input[type='password'] {
            padding: 5px 10px;
            border: 1px solid #dedede;
            width: 100%;
        }

        #btn_reg {
            margin-top: 20px;
            display: block;
            padding: 9px 10px;
            text-align: center;
            background: #ffa84c;
            border: none;
            width: 100%;
            text-transform: uppercase;
        }

        select {
            padding: 6px 10px;
            border: 1px solid #dedede;
            width: 100%;
        }
    </style>
    <h1>Thêm mới</h1>
    <?php
        if (!empty($alert['success'])) {
        ?>
            <p class="success"><?php echo $alert['success']; ?></p>
        <?php
        }
        ?>
    <form action="" method="POST" id="form_reg">
        <label for="fullname">Họ và Tên</label>
        <input type="text" name="fullname" id="fullname">
        <?php
        if (!empty($error['fullname'])) {
        ?>
            <p class="error"><?php echo $error['fullname']; ?></p>
        <?php
        }
        ?>
        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" id="username">
        <?php
        if (!empty($error['username'])) {
        ?>
            <p class="error"><?php echo $error['username']; ?></p>
        <?php
        }
        ?>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password">
        <?php
        if (!empty($error['password'])) {
        ?>
            <p class="error"><?php echo $error['password']; ?></p>
        <?php
        }
        ?>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <?php
        if (!empty($error['email'])) {
        ?>
            <p class="error"><?php echo $error['email']; ?></p>
        <?php
        }
        ?>
        <select name="gender" id="">
            <option value="">---Chọn giới tính---</option>
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
        </select>
        <?php
        if (!empty($error['gender'])) {
        ?>
            <p class="error"><?php echo $error['gender']; ?></p>
        <?php
        }
        ?>
        <input type="submit" value="Đăng ký" name="btn_reg" id="btn_reg">
    </form>
</div>



<?php
get_footer();
?>