<?php
// Khai báo các biến dùng chung
function show_array($array) {
    if (is_array($array)) {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    } else {
        echo "Không phải mảng";
    }
}

function get_header() {
    $path_header = __DIR__ . "/../include/header.php"; // Đường dẫn tuyệt đối
    if (file_exists($path_header)) {
        require_once $path_header;
    } else {
        echo "Không tìm thấy file header";
    }
}
// get_header();

?>