<?php
require_once './lib/data.php';
// echo file_exists('./lib/data.php');

// showData($_FILES);
// Thư mục chưa file upload lên trong project
if (isset($_FILES['file_upload'])) {
    $target_dir = "upload/";

    // Đường dẫn file sau khi upload
    $target_file = $target_dir . $_FILES['file_upload']['name'];

    // Kiểm tra file đã tồn tại chưa
    if (move_uploaded_file($_FILES['file_upload']['tmp_name'], $target_file)) {
        echo "File " . $_FILES['file_upload']['name'] . " đã được upload";
    } else {
        echo "Upload file thất bại";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file lên server với PHP</title>
</head>
<body>
    <h1>Upload file</h1>
    <form enctype="multipart/form-data" action="#" method="post">
        <!-- <label for="file_upload">Chọn file</label><br> -->
        <input type="file" name="file_upload" id="file_upload"><br><br>
        <button type="submit" value="Send File">Upload</button>
    </form>
</body>
</html>