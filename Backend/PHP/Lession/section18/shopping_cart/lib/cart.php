<?php
// Thêm sản phẩm vào giỏ hàng
function add_cart($id) {
    global $list_product;
    $item = get_product_by_id($id);
    // Lưu thông tin sản phẩm vào session
    $qty = 1; // Số lượng mặc định
    // Nếu sản phẩm đã tồn tại trong giỏ hàng thì cộng giá trị $qty thêm 1
    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }
    // Lưu thông tin sản phẩm vào session
    $_SESSION['cart']['buy'][$id] = array(
        'id' => $item['id'],
        'product_title' => $item['product_title'],
        'price' => $item['price'],
        'product_thumb' => $item['product_thumb'],
        'code' => $item['code'],
        'qty' => $qty,
        'sub_total' => $item['price'] * $qty
    );
    // Cập nhật thông tin giỏ hàng
    update_info_cart();
}

// Cập nhật giỏ hàng
function update_info_cart() {
    if (isset($_SESSION['cart'])) {
        $numo_order = 0;
        $total = 0;
        foreach ($_SESSION['cart']['buy'] as $item) {
            $numo_order += $item['qty'];
            $total += $item['sub_total'];
        }
        $_SESSION['cart']['info'] = array(
            'num_order' => $numo_order,
            'total' => $total
        );
    }
}

// Lấy danh sách sản phẩm trong giỏ hàng
function get_list_buy_cart() {
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['buy'];
    }
    return false;
}

// Láy số lượng trong giỏ hàng
function get_num_order_cart() {
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['num_order'];
    }
    return false;
}

// Lấy tổng giá trị đơn hàng
function get_total_cart() {
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['total'];
    }
    return false;
}

// Cập nhật số lượng đơn hàng
function update_cart($qty){
    foreach($qty as $id => $new_qty) {
        $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
        $_SESSION['cart']['buy'][$id]['sub_total'] = $new_qty * $_SESSION['cart']['buy'][$id]['price'];
    }
    update_info_cart();
}
?>