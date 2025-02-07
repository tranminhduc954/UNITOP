<?php
// Xóa mảng trong PHP
// -> Xóa cả mảng
$user = array(
    'id' => '1',
    'fullname'=> 'Trần Minh Đức',
    'gender'=> 'Male',
    'email'=> 'tranminhduc.hbh@gmail.com',
    'phone'=> '0859616768'
);

// unset($user); //Xóa cả mảng
unset($user['id']); //Xóa 1 phần tử với key xác định

echo "<pre>";
print_r($user);
echo "<pre>";



?>