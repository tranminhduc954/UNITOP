<?php
// Lấy id sản phẩm từ url
$id = (int)$_GET['id'];

// Thêm sản phẩm vào giỏ hàng
add_cart($id);

// show_array($_SESSION['cart']);

// Giữ nguyên trang hiện tại khi thêm sản phẩm vào giỏ hàng
header("Location: ?mod=product&act=detail&id=$id");
?>