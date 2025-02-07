<?php
// Xây dựng các hàm dùng chung
function get_header() { // Hàm hiển thị header
    $path = './includes/header.php';
    if (file_exists($path)) {
        require_once $path;
    } else {
        echo "Không tìm thấy file $path";
    }
}

function get_footer() { // Hàm hiển thị footer
    $path = './includes/footer.php';
    if (file_exists($path)) {
        require_once $path;
    } else {
        echo "Không tìm thấy file $path";
    }
}




?>