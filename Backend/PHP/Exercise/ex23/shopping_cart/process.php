<?php
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

header('Content-Type: text/plain');

// Ghi log để debug
file_put_contents('debug.log', "POST:\n" . print_r($_POST, true));

if (isset($_POST['product_id']) && isset($_POST['qty'])) {
    $id = (int)$_POST['product_id'];
    $qty = (int)$_POST['qty'];

    if ($qty <= 0) {
        unset($_SESSION['cart']['buy'][$id]);
    } else {
        $_SESSION['cart']['buy'][$id]['qty'] = $qty;
        $_SESSION['cart']['buy'][$id]['sub_total'] = $qty * $_SESSION['cart']['buy'][$id]['price'];
    }

    echo "OK";
} else {
    http_response_code(400);
    echo "Thiếu dữ liệu";
}

?>
