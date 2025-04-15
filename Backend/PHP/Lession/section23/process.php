<?php
header('Content-Type: text/plain');

// Ghi log để debug
file_put_contents('debug.log', "POST:\n" . print_r($_POST, true));

if (isset($_POST['num_order']) && isset($_POST['price'])) {
    $num_order = (int)$_POST['num_order'];
    $price = (int)$_POST['price'];

    if ($num_order < 0 || $price < 0) {
        http_response_code(400);
        echo "Dữ liệu không hợp lệ!";
        exit;
    }

    $total = $num_order * $price;
    echo $total;
} else {
    http_response_code(400);
    echo "Thiếu tham số!";
}
?>
