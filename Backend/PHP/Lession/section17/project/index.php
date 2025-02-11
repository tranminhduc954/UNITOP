<?php
$path_require = __DIR__ . '/lib/template.php';
require_once $path_require;

// Get header
get_header();

$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
$act = !empty($_GET['act']) ? $_GET['act'] : 'main';
$path = __DIR__ . '/modules/' . $mod . '/' . $act . '.php';

if (file_exists($path)) {
    require_once $path;
} else {
    echo "Không tìm thấy trang";
}

// Get footer

?>