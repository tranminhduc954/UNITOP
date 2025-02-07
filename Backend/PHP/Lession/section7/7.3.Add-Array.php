<?php
// Thêm phần tử cho mảng
// -> Thêm phần tử cho mảng có key mặc định
$listNumber = array(2, 4, 6, 8);
$listNumber[] = 10;

echo "<pre>";
print_r($listNumber);
echo "<pre>";



// -> Thêm phần tử cho mảng có key xác định
$listUser = array(
    'id' => 1,
    'fullname' => 'Trần Minh Đức',
    'email' => 'tranminhduc.hbh@gmail.com'
);

$listUser['phone'] = '0859616768'; // Thêm value cho mảng có key xác định

echo "<pre>";
print_r($listUser);
echo "<pre>";

var_dump($listUser['phone']);