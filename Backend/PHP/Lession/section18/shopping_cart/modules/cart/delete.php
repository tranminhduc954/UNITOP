<?php
// show_array($_SESSION['cart']);
// Kiểm tra điều kiện gán biến xóa
if (isset($_GET['act']) && $_GET['act'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id']; // Lấy tham số id hàng cần xóa

    // Kiểm tra trong giỏ hàng có tồn tại và không rỗng
    if (isset($_SESSION['cart']['buy']) && !empty($_SESSION['cart']['buy'])) {
        // Chạy vòng lặp kiểm tra giỏ hàng, nếu trùng id cần xóa thì unset item đó
        foreach ($_SESSION['cart']['buy'] as $key => $item) {
            if ($item['id'] == $id) {
                unset($_SESSION['cart']['buy'][$key]); // Xóa phần tử khỏi mảng
                break; // Dừng vòng lặp khi tìm thấy và xóa sản phẩm
            }
        }
    }
}

// Đảm bảo giỏ hàng được cập nhật và chuyển hướng lại về giỏ hàng
header('Location: /UNITOP/Backend/PHP/Lession/section18/shopping_cart/?mod=cart&act=show');
exit();


?>