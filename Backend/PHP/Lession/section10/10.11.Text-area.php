<?php
// Nhận dữ liệu từ textarea
// B1: Kiểm tra xem có dữ liệu được gửi đi hay không;
// B2: Kiểm tra xem dữ liệu được gửi đi có rỗng hay không;
// B3: Lấy dữ liệu từ form
function show_arr($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
show_arr($_POST);

if (isset($_POST["btn-add"])) {
    if (!empty($_POST["content"])) {
        $content = $_POST["content"];
        echo "Nội dung bài viết: " . $content;
    } else {
        echo "không để trống nội dung bài viết";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dữ liệu từ Text area</title>
</head>
<body>
    <h1>Thêm bài viết</h1>
    <form action="" method="POST">
        <textarea name="content" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" name="btn-add" value="Thêm bài viết">
    </form>
</body>
</html>