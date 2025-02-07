<?php
// Mảng đa chiều trong PHP
// -> Khi một phần tử trong mảng là 1 mảng khác, thì mảng đó chính là mảng đa chiều
// -> Mảng đa chiều thường được sử dụng để lưu trữ các dữ liệu có cấu trúc đa tầng
// -> Thao tác với mảng đa chiều giống với mảng một chiều
$list_user = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Trần Minh Đức',
        'email' =>  'tranminhduc.hbh@gmail.com',
        'phone' => '0859616768'
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Nguyễn Thùy Linh',
        'email' => 'linhnt.hbh@gmail.com',
        'phone' => '0827788688'
    )
);

// Thêm phần tử mới vào mảng (áp dụng như mảng 1 chiều thôi)
$list_user[3] = array(
    'id' => 3,
    'fullname' => 'Trần Đức Trí',
    'email' => 'tritd.hbh@gmail.com',
    'phone' => '0888657269'
);

echo "<pre>";
print_r($list_user);
echo "<pre>";

// Lấy thông tin từ mảng đa chiều
echo "Truy cập vào key thứ 3 của mảng lớn > truy cập vào key fullname của mảng bé lấy ra giá trị: ".$list_user[3]['fullname'];
