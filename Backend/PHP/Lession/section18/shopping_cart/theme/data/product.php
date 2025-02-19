<?php
// Danh mục sản phẩm

/**
 * id => id
 * tên danh mục => cat_title
 */
$list_product_cat = array(
    1 => array(
        'id' => 1,
        'cat_title' => 'Điện thoại'
    ),
    2 => array(
        'id' => 2,
        'cat_title' => 'Macbook'
    )
    // 3 => array(
    //     'id' => 3,
    //     'cat_title' => 'Laptop'
    // ),
)

// Dữ liệu sản phẩm

/**
 * id => id
 * tên sản phẩm => product_title
 * giá => price
 * mã sản phẩm => code
 * mô tả => product_desc
 * ảnh => product_thumb //url ảnh
 * nội dung => product_content
 * danh mục => cat_id
 */
$list_product = array(
    1 => array(
        'id' => 1,
        'product_title' => 'Iphone 12',
        'price' => 20000000,
        'code' => 'SP001',
        'product_desc' => 'Sản phẩm do apple sản xuất',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-xanh-duong-new-600x600-600x600.jpg',
        'product_content' => 'Sản phẩm do apple sản xuất',
        'cat_id' => 1
    ),
    2 => array(
        'id' => 2,
        'product_title' => 'Iphone 11',
        'price' => 15000000,
        'code' => 'SP002',
        'product_desc' => 'Sản phẩm do apple sản xuất',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-red-600x600.jpg',
        'product_content' => 'Sản phẩm do apple sản xuất',
        'cat_id' => 1
    ),
    3 => array(
        'id' => 3,
        'product_title' => 'Macbook Pro 2020',
        'price' => 30000000,
        'code' => 'SP003',
        'product_desc' => 'Sản phẩm do apple sản xuất',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/220522/macbook-pro-2020-m1-silver-600x600-600x600.jpg',
        'product_content' => 'Sản phẩm do apple sản xuất',
        'cat_id' => 2
    ),
    4 => array(
        'id' => 4,
        'product_title' => 'Macbook Air 2020',
        'price' => 25000000,
        'code' => 'SP004',
        'product_desc' => 'Sản phẩm do apple sản xuất',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/220522/macbook-pro-2020-m1-silver-600x600-600x600.jpg',
        'product_content' => 'Sản phẩm do apple sản xuất',
        'cat_id' => 2
    )
)

?>