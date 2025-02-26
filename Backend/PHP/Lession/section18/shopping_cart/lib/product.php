<?php
// Xây dựng hàm lấy sản phẩm theo id
function get_product_by_id($id) {
    global $list_product;
    foreach ($list_product as $item) {
        if ($id == $item['id']) {
            return $item;
        }
    }
}

// Xây dựng hàm lấy danh sách sản phẩm theo id danh mục
function get_list_product_by_id($id) {
    global $list_product;
    $data = [];
    foreach ($list_product as $item) {
        if ($id == $item['cat_id']) {
            $data[] = $item;
        }
    }
    return $data;
}

// Xây dựng hàm lấy danh mục cateogry theo id
function get_product_cat($id) {
    global $list_product_cat;
    foreach ($list_product_cat as $item) {
        if ($id == $item['id']) {
            return $item;
        }
    }
}

?>