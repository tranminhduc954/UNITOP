<?php
// show_array($_SESSION['cart']);

// Kiểm tra nếu có tham số act là 'delete_all'
if (isset($_GET['act']) && $_GET['act'] == 'delete_all') {
    // Xóa toàn bộ giỏ hàng
    unset($_SESSION['cart']['buy']); // Xóa toàn bộ giỏ hàng khỏi session
    
    // Chuyển hướng về trang giỏ hàng sau khi xóa hết giỏ hàng
    header('Location: /UNITOP/Backend/PHP/Lession/section18/shopping_cart/?mod=cart&act=show');
    exit();
}


?>