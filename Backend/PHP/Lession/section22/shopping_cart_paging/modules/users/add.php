<?php
get_header();
get_sidebar();

if (isset($_POST['btn_reg'])) {
    $error = [];
    $alert = [];

    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Không được để trống họ tên";
    } else {
        $fullname = trim(htmlspecialchars($_POST['fullname']));
    }

    if (empty($_POST['gender'])) {
        $error['gender'] = "Bạn cần chọn giới tính";
    } else {
        $gender = $_POST['gender'];
    }

    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống tên đăng nhập";
    } else {
        $pattern = "/^(?![._-])[a-zA-Z0-9._-]{6,32}$/";
        if (!preg_match($pattern, $_POST['username'])) {
            $error['username'] = "Tên đăng nhập không đúng định dạng";
        } else {
            $username = trim(htmlspecialchars($_POST['username']));
        }
    }

    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống mật khẩu";
    } else {
        $pattern = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*?&]{6,32}$/";
        if (!preg_match($pattern, $_POST['password'])) {
            $error['password'] = "Mật khẩu không đúng định dạng";
        } else {
            $password = md5($_POST['password']);
        }
    }

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

    if (empty($error)) {
        $sql = "INSERT INTO `tbl_user` (`fullname`, `username`, `password`, `email`, `gender`)
                VALUES ('{$fullname}', '{$username}', '{$password}', '{$email}', '{$gender}')";
        if (mysqli_query($conn, $sql)) {
            $alert['success'] = "Đăng ký thành công!";
            header("Location: ?mod=users&act=main");
        } else {
            echo "Lỗi: " . mysqli_error($conn);
        }
    }
}
?>

<div id="content">
    <?php if (!empty($alert['success'])): ?>
        <p class="success"><?php echo $alert['success']; ?></p>
    <?php endif; ?>

    <form action="" method="POST" id="form_reg">
        <h2>Đăng ký người dùng</h2>

        <label for="fullname">Họ và Tên</label>
        <input type="text" name="fullname" id="fullname" placeholder="Nhập họ tên">
        <?php if (!empty($error['fullname'])): ?><p class="error"><?php echo $error['fullname']; ?></p><?php endif; ?>

        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" id="username" placeholder="Tên đăng nhập">
        <?php if (!empty($error['username'])): ?><p class="error"><?php echo $error['username']; ?></p><?php endif; ?>

        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password" placeholder="Nhập mật khẩu">
        <?php if (!empty($error['password'])): ?><p class="error"><?php echo $error['password']; ?></p><?php endif; ?>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Nhập email">
        <?php if (!empty($error['email'])): ?><p class="error"><?php echo $error['email']; ?></p><?php endif; ?>

        <label for="gender">Giới tính</label>
        <select name="gender" id="gender">
            <option value="">--- Chọn giới tính ---</option>
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
        </select>
        <?php if (!empty($error['gender'])): ?><p class="error"><?php echo $error['gender']; ?></p><?php endif; ?>

        <input type="submit" value="Đăng ký" name="btn_reg" id="btn_reg">
    </form>
</div>

<style>
    #content {
        display: flex;
        justify-content: center;
        padding: 40px 0;
    }

    #form_reg {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 500px;
    }

    #form_reg h2 {
        text-align: center;
        margin-bottom: 25px;
        font-size: 22px;
        color: #333;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
        color: #555;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        border: 1px solid #ccc;
        transition: border-color 0.3s;
    }

    input:focus,
    select:focus {
        border-color: #007bff;
        outline: none;
    }

    #btn_reg {
        background: #ffa84c;
        border: none;
        padding: 12px;
        width: 100%;
        font-weight: bold;
        text-transform: uppercase;
        border-radius: 5px;
        color: white;
        cursor: pointer;
        transition: background 0.3s;
    }

    #btn_reg:hover {
        background: #ff8800;
    }

    .error {
        color: red;
        font-size: 14px;
        margin-top: -10px;
        margin-bottom: 10px;
    }

    .success {
        color: green;
        font-weight: bold;
        text-align: center;
        margin-bottom: 15px;
    }

    @media (max-width: 600px) {
        #form_reg {
            padding: 20px;
            margin: 0 10px;
        }
    }
</style>

<?php get_footer(); ?>
