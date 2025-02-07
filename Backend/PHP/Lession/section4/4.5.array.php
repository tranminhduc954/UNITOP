<?php
/*
Kiểu dữ liệu mảng
1. Mảng là kiểu dữ liệu lưu trữ được nhiều giá trị khác nhau trong cùng 1 biến
2. Mảng là kiểu dữ liệu quan trọng được sử dụng để lưu trữ, xử lý dữ liệu trong chương trình
3. Mảng bao gồm 2 loại: mảng 1 chiều, mảng đa chiều
*/
// Mảng 1 chiều: -> mảng chứa nhiều phần tử
$list_number = array("1","hai","03","tứ","five","Sáu");

echo"<pre>";
print_r($list_number); //dùng print_r để in ra giá trị mạng
echo"</pre>";

// Mảng đa chiều: -> mảng chứa phần tử là các mảng con
$listUser = array(
    "array('Trần Minh Đức','29','Male')",
    "array('Nguyễn Thùy Linh', '30', 'Fe Male')"
);
// Cú pháp khai báo mảng như trên bị sai do đang ép kiểu phần tử mảng là string với dấu ""

echo"<pre>";
print_r($listUser);
echo"</pre>";

$listAccount = array(
    1 => array('id'=>01, 'fullname'=>'Trần Minh Đức', 'gender'=>'Male'),
    2 => array('id'=>02, 'fullname'=>'Nguyễn Thùy Linh', 'gender'=>'Fe Male')
);

echo"<pre>";
print_r($listAccount);
echo"</pre>";

?>