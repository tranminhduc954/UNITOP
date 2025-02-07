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
// getHeader();

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

function check_login($username, $password) {
    global $list_user;
    foreach ($list_user as $item) {
        if ($item['username'] == $username && $item['password'] == md5($password)) {
            return true;
        }
    }
    return false;
}

function is_login() {
    if (isset($_SESSION['is_login'])) {
        return true;
    }
    return false;
}

function redirect_to($file)
{
    header("Location: $file");
    exit();
}

?>