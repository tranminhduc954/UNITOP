<?php
session_start();
ob_start();
require_once('./template/temp.php');
require_once('./data/user.php');

// Toán tử 3 ngôi - Nếu có giá trị $get_page thì gán giá trị cho biến $page, nếu không có giá trị thì $page = 'home';
// $page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Câu lệnh điều khiển if-else
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'login';
}

// Kiểm tra tình trạng login
if (!is_login() && $page != 'login') {
    // Nếu chưa login mà vào các page khác ngoài trang đăng nhập thì chuyển người dùng về trang login
    header("Location: ?page=login");
}

$path = __DIR__ . "/./pages/$page.php"; // Set đường dẫn tuyệt đối cho thư mục pages
if (file_exists($path)) {
    require_once($path); // reqire page lên xử lý ở index
} else {
    echo "Kiểm tra lại đường dẫn không chính xác";
}
?>