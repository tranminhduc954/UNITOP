<?php
$id = $_GET['id'];
echo $id;

// show_array($_SESSION['cart']);

if (isset($_SESSION['cart']['buy']) && isset($_GET['id'])) {
    foreach ($_SESSION['cart']['buy'] as  $key => $item) {
        if ($id == $item['id']) {
            unset($_SESSION['cart']['buy'][$key]);
            update_info_cart(); // Cập nhật lại giá trị giỏ hàng
        } else {
            unset($_SESSION['cart']);
        }
        
    }
}

header("Location: ?mod=cart&act=show");
exit;
?>
