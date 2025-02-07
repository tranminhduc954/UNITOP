
<?php
// Import Header
require_once './temp/template.php';
get_header();

// Xử lý hiển thị nội dung trang
if (!empty($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

if ($page != '') {
    $path = "./pages/{$page}.php";
} else {
    $path = "home.php";
}

if (!empty($page)) {
    require_once $path;
} elseif ($page == '') {
    require_once './pages/home.php';
} else {
    echo "Không có trang này";
}

// Import Footer
get_footer();
?>