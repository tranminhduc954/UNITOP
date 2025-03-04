<?php
// Lấy id sản phẩm từ url
$id = (int)$_GET['id'];

// Thêm sản phẩm vào giỏ hàng
add_cart($id);

// show_array($_SESSION['cart']);

// Chuyển hướng sang giỏ hàng
redirect('?mod=cart&act=show');

?>