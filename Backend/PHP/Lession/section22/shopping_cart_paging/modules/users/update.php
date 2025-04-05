<?php
get_header();
get_sidebar();

$id = $_GET['id'];

// Kiểm tra nếu người dùng nhấn nút "Cập nhật"
if (isset($_POST['btn_reg'])) {
    $error = [];
    $alert = [];

    // Kiểm tra và lấy dữ liệu từ form
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Không được để trống fullname";
    } else {
        $fullname = trim(htmlspecialchars($_POST['fullname']));
    }

    if (empty($_POST['gender'])) {
        $error['gender'] = "Bạn cần chọn giới tính";
    } else {
        $gender = $_POST['gender'];
    }

    if (empty($_POST['email'])) {
        $error['email'] = "Không được để trống email";
    } else {
        $email = trim(htmlspecialchars($_POST['email']));
    }

    // Nếu không có lỗi thì thực hiện cập nhật dữ liệu
    if (empty($error)) {
        $sql = "UPDATE `tbl_user` SET `fullname` = '{$fullname}', `gender` = '{$gender}' WHERE `user_id` = {$id}";

        if (mysqli_query($conn, $sql)) {
            $alert['success'] = "Update dữ liệu thành công!";
        } else {
            echo "Lỗi " . mysqli_error($conn);
        }
    }
}

// Lấy lại dữ liệu từ cơ sở dữ liệu sau khi cập nhật
$sql = "SELECT * FROM `tbl_user` WHERE `user_id` = {$id}";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div id="content">
    <style>
        /* Đặt CSS cho form */
        #form_reg {
            width: 500px;
            padding-left: 200px;
        }

        label {
            display: block;
            margin: 0px 0px 5px 0px;
        }

        input,
        select {
            display: block;
            margin-bottom: 10px;
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
    </style>

    <?php if (!empty($alert['success'])) { ?>
        <p class="success"><?php echo $alert['success']; ?></p>
    <?php } ?>

    <form action="" method="POST" id="form_reg">
        <label for="fullname">Họ và Tên</label>
        <input type="text" name="fullname" id="fullname" value="<?php echo $row['fullname']; ?>">
        <?php if (!empty($error['fullname'])) { ?>
            <p class="error"><?php echo $error['fullname']; ?></p>
        <?php } ?>

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $row['email']; ?>">
        <?php if (!empty($error['email'])) { ?>
            <p class="error"><?php echo $error['email']; ?></p>
        <?php } ?>

        <label for="gender">Giới tính</label>
        <select name="gender">
            <option value="male" <?php echo ($row['gender'] == 'male') ? 'selected' : ''; ?>>Nam</option>
            <option value="female" <?php echo ($row['gender'] == 'female') ? 'selected' : ''; ?>>Nữ</option>
        </select>
        <?php if (!empty($error['gender'])) { ?>
            <p class="error"><?php echo $error['gender']; ?></p>
        <?php } ?>

        <input type="submit" value="Cập nhật" name="btn_reg" id="btn_reg">
    </form>
</div>

<?php
get_footer();
?>