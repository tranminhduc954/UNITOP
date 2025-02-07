<?php
// Cập nhật giá trị mảng
// Để cập nhật giá trị mảng ta cần xác định key của phần từ cần cập nhật, và thực hiện gán giá trị mới vào phần tử đó
$listUser = array(
    'id' => 1,
    'fullname' => 'Trần Minh Đức',
    'email' => 'tranminhduc.hbh@gmail.com'
);

$listUser['fullname'] = 'Trần Đức Minh'; // truy cập vào key ['fullname'] và gán giá trị mới
echo "<pre>";
print_r($listUser);
echo "<pre>";






?>