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

$path = __DIR__ . "/./pages/$page.php"; // Set đường dẫn tuyệt đối cho thư mục pages
if (file_exists($path)) {
    require_once($path); // reqire page lên xử lý ở index
} else {
    echo "Kiểm tra lại đường dẫn không chính xác";
}
?>