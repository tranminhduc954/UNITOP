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
    );

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
        'product_content' => 'Sản phẩm do apple sản xuất <img src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-xanh-duong-new-600x600-600x600.jpg" alt=""/>',
        'cat_id' => 1
    ),
    2 => array(
        'id' => 2,
        'product_title' => 'Iphone 11',
        'price' => 15000000,
        'code' => 'SP002',
        'product_desc' => 'Sản phẩm do apple sản xuất',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-red-600x600.jpg',
        'product_content' => 'Sản phẩm do apple sản xuất <img src="https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-red-600x600.jpg" alt=""/>',
        'cat_id' => 1
    ),
    3 => array(
        'id' => 3,
        'product_title' => 'Macbook Pro 2020',
        'price' => 30000000,
        'code' => 'SP003',
        'product_desc' => 'Sản phẩm do apple sản xuất',
        'product_thumb' => 'https://th.bing.com/th/id/OIP.-_IWcGdxb9Iz17_GtcNQawHaEK?rs=1&pid=ImgDetMain',
        'product_content' => 'Sản phẩm do apple sản xuất <img src="https://th.bing.com/th/id/OIP.-_IWcGdxb9Iz17_GtcNQawHaEK?rs=1&pid=ImgDetMain" alt=""/>',
        'cat_id' => 2
    ),
    4 => array(
        'id' => 4,
        'product_title' => 'Macbook Air 2020',
        'price' => 25000000,
        'code' => 'SP004',
        'product_desc' => 'Sản phẩm do apple sản xuất',
        'product_thumb' => 'https://product.hstatic.net/1000167396/product/mac_pro_2020_555795ea1cd14c7f82c4a5b8aa8a3dd5_master.jpg',
        'product_content' => 'Sản phẩm do apple sản xuất <img src="https://product.hstatic.net/1000167396/product/mac_pro_2020_555795ea1cd14c7f82c4a5b8aa8a3dd5_master.jpg" alt=""/>',
        'cat_id' => 2
    ),
    5 => array(
        'id' => 5,
        'product_title' => 'Macbook Pro 2021',
        'price' => 35000000,
        'code' => 'SP005',
        'product_desc' => 'Sản phẩm do apple sản xuất',
        'product_thumb' => 'https://www.xtmobile.vn/vnt_upload/product/10_2021/thumbs/(600x600)_crop_macbook-pro-m1-pro-2021-16-inch-16gb-512gb.jpg',
        'product_content' => 'Sản phẩm do apple sản xuất <img src="https://www.xtmobile.vn/vnt_upload/product/10_2021/thumbs/(600x600)_crop_macbook-pro-m1-pro-2021-16-inch-16gb-512gb.jpg" alt=""/>',
        'cat_id' => 2
    ),
    6 => array(
        'id' => 6,
        'product_title' => 'Macbook Air 2021',
        'price' => 30000000,
        'code' => 'SP006',
        'product_desc' => 'Sản phẩm do apple sản xuất',
        'product_thumb' => 'https://th.bing.com/th/id/OIP.IvO3PdLNTMA8UDYlMv_GAAHaHa?rs=1&pid=ImgDetMain',
        'product_content' => 'Sản phẩm do apple sản xuất <img src="https://th.bing.com/th/id/OIP.IvO3PdLNTMA8UDYlMv_GAAHaHa?rs=1&pid=ImgDetMain" alt=""/>',
        'cat_id' => 2
    )
    );

?>