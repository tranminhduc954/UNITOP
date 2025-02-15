<?php
// Khai báo các hàm dùng chung
function show_array($array) {
    if (is_array($array)) {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    } else {
        echo "{$array} không đúng dịnh dạng mảng";
    }
}

function getHeader() {
    // __DIR__ trả về đường dẫn tuyệt đối của thư mục chứa file hiện tại (temp.php)
    $path = __DIR__ . '/../includes/header.php';

    if (file_exists($path)) {
        require_once($path); // Nhúng file nếu tồn tại
    } else {
        echo "$path: Đường dẫn không tồn tại";
    }
}
getHeader();

function getFooter() {
    // __DIR__ trả về đường dẫn tuyệt đối của thư mục chứa file hiện tại (temp.php)
    $path = __DIR__ . '/../includes/footer.php';
    
    if (file_exists($path)) {
        require_once($path);
    } else {
        echo "$path: Đường dẫn không tồn tại";
    }
}
// get_footer();

?>