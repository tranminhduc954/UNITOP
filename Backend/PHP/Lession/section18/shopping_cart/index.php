<?php
session_start();
ob_start();
// Dữ liệu
require 'data/pages.php';
require 'data/products.php';

// Thư viện hàm
require 'lib/data.php';
require 'lib/template.php';
require 'lib/pages.php';
require 'lib/product.php';
require 'lib/number.php';
require 'lib/cart.php';

// Xử lý chuyển luồng các module để chạy trên file index
$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
$act = !empty($_GET['act']) ? $_GET['act'] : 'main';
$path = "modules/{$mod}/{$act}.php";

if (file_exists($path)) {
    require $path;
} else {
    require 'inc/404.php';
}



?>