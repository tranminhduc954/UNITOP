<?php
// Đổi tên file khi upload
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    } else {
        echo "Không đúng định dạng mảng";
    }
}
// Đặt cờ hiệu xử lý lỗi
$error = [];


if (isset($_POST['upload'])) {
    if (isset($_FILES['file_upload']) && $_FILES['file_upload']['error'] != 4) {
        // Gán biến xử lý
        $file_name = $_FILES['file_upload']['name'];
        $file_type = $_FILES['file_upload']['type'];
        $file_tmpname = $_FILES['file_upload']['tmp_name'];
        $file_error = $_FILES['file_upload']['error'];
        $file_size = $_FILES['file_upload']['size'];
        // Kiểm tra kích thước file không được lớn hơn 20MB
        if ($file_size > (20 * 1024 * 1024)) {
            $error['size'] = "Kích thước file không được lớn hơn 20MB";
        }
        // Kiểm tra định dạng file phải là ảnh
        $temp_type = ['image/png', 'image/jpeg', 'image/gif'];
        if (!in_array($file_type, $temp_type)) {
            $error['type'] = "Định dạng file hỗ trợ (.PNG, .JPG, .JPEG, .GIF)";
        }
        // Thư mục lưu file và đường dẫn file mới
        $upload_dir = __DIR__ . '/uploads/';
        $file_dir = $upload_dir . basename($file_name);
        // Kiểm tra trùng file trên hệ thống
        if (file_exists($file_dir)) {
            // Sử dụng vòn lặp while để tăng giá trị tên file mới
            require_once('15.5.2.change-file-name.php');
        }
        // Xử lý khi không có lỗi upload
        if (empty($error)) {
            if (move_uploaded_file($file_tmpname, $file_dir)) {
                echo "Upload thành công";
            } else {
                $error['upload'] = "Upload thất bại";
            }
        } else {
            show_array($error);
        }
    } else {
        $error['empty'] = "Không có file Upload";
        show_array($error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuẩn hóa Upload ảnh lên server</title>
</head>

<body>
    <h1>Upload file</h1>
    <form enctype="multipart/form-data" action="" method="post">
        <p>Lưu ý: Dung lượng file < 20MB</p>
                <p>Định dạng file hỗ trợ (.PNG, .JPG, .JPEG, .GIF)</p>
                <input type="file" name="file_upload" id="file_upload"><br>
                <button type="submit" name="upload">Upload</button>
                <!-- <button type="submit" name="delete">Delete Files</button> -->
    </form>
</body>

</html>