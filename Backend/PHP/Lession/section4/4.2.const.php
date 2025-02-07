<?php
//Biến và Hằng trong PHP
//1. Hằng số được khai báo với cú pháp -> không thể thay đổi giá trị này, và có tính chất global scope
define('MINHEIGHT', '50');

//2. Biến được khai báo với cú pháp -> có thể thay đổi giá trị bị giới hạn trong block scope
$minHeight = 10;

echo MINHEIGHT;
echo "<br>"; //Xuống dòng trong PHP bằng cách echo ra 1 thẻ html xuống dòng
echo "$minHeight";
echo "<br>";
echo __LINE__; //Hàm định nghĩa sẵn trong PHP
?>