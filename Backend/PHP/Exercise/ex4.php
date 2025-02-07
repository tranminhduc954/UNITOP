<?php
/**
 * BÀI TẬP 4 PHP
 * 
 * 1 -> Tạo biến lưu trữ danh sách thành viên
 * 2 -> Tạo biến lưu trữ danh sách các sản phẩm
 * 3 -> Hiển thị thông tin cá nhân ra HTML
 * 
*/

// 1 -> Tạo biến lưu trữ danh sách thành viên (mảng đa chiều)
$listUser = array(
    array(
        "id" => 01,
        "fullname" => "Trần Minh Đức",
        "age" => 30,
        "gender" => "Male"
    ),
    array(
        "id" => 02,
        "fullname" => "Nguyễn Thùy Linh",
        "age" => 31,
        "gender"=> "Female"
    )
);

echo"<pre>";
print_r($listUser);
echo"</pre>";

// 2 -> Tạo biến lưu trữ danh sách các sản phẩm (mảng đa chiều)
$listProduct = array(
    array(
        'Conan',
        '01',
        '2kg'
    ),
    array(
        'Dragon Ball',
        '03',
        '5kg'
    ),
    array(
        'Doraemon',
        '06',
        '12kg'
    )
);

echo"<pre>";
print_r($listProduct);
echo"</pre>";

// 3 -> Hiển thị thông tin cá nhân ra HTML
// B1 -> Khai báo các biến PHP chưa thông tin cá nhân
// B2 -> Tạo thẻ HTML và truyền biến vào đó

$full_name = "Trần Minh Đức";
$age = 30;
$gender = "Male";

?>

<html>
    <h1>Thông tin cá nhân</h1>
    <ul>
        <li>Họ và tên: <strong><?php echo "{$full_name}";?></strong></li>
        <li>Tuổi: <strong><?php echo "{$age}";?></strong></li>
        <li>Giới tính: <strong><?php echo "{$gender}";?></strong></li>
    </ul>
</html>