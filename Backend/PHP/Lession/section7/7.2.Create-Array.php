<?php
// Tạo mảng trong PHP
// 1 -> tạo mảng rỗng
// $null_array = array();
// echo "<pre>";
// print_r($null_array);
// echo "<pre>";


// 2 -> Tạo mảng với key mặc định -> dùng trong trường hợp các value cùng 1 tính chất
// $listNumber = array(1, 2, 3, 4, 5);
// echo "<pre>";
// print_r($listNumber);
// echo "<pre>";

// 3 -> Tạo mảng với key xác định -> dùng trong trường hợp các value không cùng tính chất
// 3.1 Mảng 1 chiều
// $listUser = array(
//     "id"=> 01,
//     "name"=> "Trần Minh Đức",
//     "age"=> 30,
//     "gender"=> "Male"
// );
// echo "<pre>";
// print_r($listUser);
// echo "<pre>";

// 3.2 Mảng 2 chiều
$listProduct = array(
    array(
        "id" => 01,
        "name" => "phone",
        "price" => 100,
        "sales" => 0
    ),
    array(
        "id" => 02,
        "name" => "screen",
        "price" => 300,
        "sales" => 1
    ),
    array(
        "id" => 03,
        "name" => "keyboard",
        "price" => 200,
        "sales" => 1
    )
);
// Thêm một phần tử [key] => value cho mảng với cú pháp sau
$listProduct[3] = array(
    "id"=> 04,
    "name"=> "hub-usb",
    "price"=> 150,
    "sales"=> 0
);

$listProduct[4] = array();

echo "<pre>";
print_r($listProduct);
echo "<pre>";

?>