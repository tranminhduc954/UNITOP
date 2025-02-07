<?php
// Nhận dữ liệu từ radio button
// B1: Kiểm tra xem có dữ liệu được gửi đi hay không;
// B2: Kiểm tra xem dữ liệu được gửi đi có rỗng hay không;
// B3: Lấy dữ liệu từ form

function show_arr($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
// show_arr($_SERVER);
// show_arr($_POST);

// if (isset($_POST['btn-reg'])) { // Kiểm tra xem có dữ liệu được gửi đi hay không
//     $error = []; // Mảng lưu lỗi
//     if (empty($_POST['gender'])) { // Kiểm tra xem dữ liệu được gửi đi có rỗng hay không
//         $error[] = "Không được để trống trường giới tính";
//         print_r($error[0]);
//     } else { // Lấy dữ liệu từ form
//         $gender = $_POST["gender"]; 
//         echo $gender.'<br>';
//     }
// }

function check_radio_gender($data) {
    if (isset($data['btn-reg'])) { // Kiểm tra xem có dữ liệu được gửi đi hay không
        $error = []; // Mảng lưu lỗi
        if (empty($data['gender'])) { // Kiểm tra xem dữ liệu được gửi đi có rỗng hay không
            $error[] = "Không được để trống trường giới tính";
            print_r($error[0]);
        } else { // Lấy dữ liệu từ form
            $gender = $data["gender"]; 
            echo $gender.'<br>';
        }
    }
}
check_radio_gender($_POST);
// show_arr($_POST);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy dữ liệu từ Radion button</title>
</head>

<body>
    <h1>Giới tính</h1>
    <form action="" method="POST">
        <input type="radio" name="gender" value="Male" id="btn-male" checked="check_radio">
        <label for="btn-male">Nam</label><br>
        <input type="radio" name="gender" value="Female" id="btn-female">
        <label for="btn-female">Nữ</label><br>
        <input type="radio" name="gender" value="Other" id="btn-other">
        <label for="btn-other">Khác</label><br>
        <input type="submit" name="btn-reg" value="Register">
    </form>
</body>

</html>