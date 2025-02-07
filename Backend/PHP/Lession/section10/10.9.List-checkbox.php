<?php
// Nhận dữ liệu từ list checkbox
// B1: Sử dụng hàm isset() để kiểm tra xem có dữ liệu được gửi đi hay không;
// B2: Sử dụng hàm empty() để kiểm tra xem dữ liệu được gửi đi có rỗng hay không;
// B3: Sử dụng hàm is_array() để kiểm tra xem dữ liệu được gửi đi có phải là mảng hay không;
// B4: Sử dụng vòng lặp foreach() để lấy dữ liệu từ form;
// B5: Hiển thị dữ liệu lấy được ra

function show_arr($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

if (isset($_POST['btn-reg'])) {
    if (!empty($_POST['course'])) {
        // Cách 1:
        foreach ($_POST['course'] as $item) {
            echo $item . '<br>';
        }
        echo '-------------------<br>';
        // Cách 2:
        $list_course = implode(', ', $_POST['course']);
        echo '' . $list_course . '<br>';
    } else {
        echo 'Không có môn học nào được chọn';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dữ liệ từ list checkbox</title>
</head>

<body>
    <h1>Chọn môn học bạn muốn học:</h1>
    <form action="" method="post">
        <input type="checkbox" name="course[]" value="PHP" id="btn-php">
        <label for="btn-php">PHP</label><br>
        <input type="checkbox" name="course[]" value="Java" id="btn-java">
        <label for="btn-java">Java</label><br>
        <input type="checkbox" name="course[]" value="Python" id="btn-python">
        <label for="btn-python">Python</label><br>
        <input type="submit" name="btn-reg" value="Register">
    </form>
</body>

</html>