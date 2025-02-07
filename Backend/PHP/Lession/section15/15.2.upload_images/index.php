<?php
session_start();

function showData($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
showData($_FILES);

if (isset($_POST['upload']) && isset($_FILES['file_upload'])) {
    if ($_FILES['file_upload']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['file_upload']['name'];
        $file_type = $_FILES['file_upload']['type'];
        $file_tmpname = $_FILES['file_upload']['tmp_name'];
        $file_size = $_FILES['file_upload']['size'];

        // Kiểm tra dung lượng file (< 20MB)
        if ($file_size < (20 * 1024 * 1024)) {
            $temp_img = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'];

            // Kiểm tra định dạng file
            if (in_array($file_type, $temp_img)) {
                $target_dir = "upload/";
                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }

                $target_file = $target_dir . $file_name;

                // Kiểm tra tên file trùng
                if (file_exists($target_file)) {
                    echo "File đã tồn tại trên hệ thống.";
                } else {
                    if (move_uploaded_file($file_tmpname, $target_file)) {
                        echo "File " . $file_name . " đã được upload.";
                        $_SESSION['uploaded_file'] = $target_file; // Lưu đường dẫn file đã upload
                    } else {
                        echo "Upload thất bại.";
                    }
                }
            } else {
                echo "Ảnh upload phải có định dạng: .PNG, .JPG, .JPEG, .GIF";
            }
        } else {
            echo "Ảnh upload phải nhỏ hơn 20MB.";
        }
    } else {
        echo "Không có file được upload hoặc có lỗi.";
    }
}

if (isset($_POST['delete'])) {
    if (isset($_SESSION['uploaded_file'])) {
        $target_file = $_SESSION['uploaded_file'];
        if (file_exists($target_file)) {
            unlink($target_file);
            echo "File đã bị xóa.";
            unset($_SESSION['uploaded_file']);
        } else {
            echo "Không tìm thấy file để xóa.";
        }
    } else {
        echo "Không có file nào để xóa.";
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
        <button type="submit" name="delete">Delete Files</button>
    </form>
</body>

</html>
