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
