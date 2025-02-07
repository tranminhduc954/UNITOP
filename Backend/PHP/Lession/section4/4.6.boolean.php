<?php
/*
* Kiểu dữ liệu Boolean (true - false)
* Là kiểu dữ liệu chỉ có 2 giá trị true - false
* Thường được dùng để nhận giá trị trả về của biểu thức điều khiển if/else, hàm
*/

$a = 10;
$b = 9;

// if ($a % 2 == 0) { // true/false
//     echo "{$a} là số chẵn";
// } else {
//     echo "{$a} là số lẻ";
// }

// function check_old($b) {
//     if ($b % 2 == 0) {
//         echo "{$b} là số chẵn";
//     } else {
//         echo "{$b} là số lẻ";
//     }
// }

// $check = check_old(9)

function check_even($n) {
    if ($n %2 == 0) {
        return "{$n} là số chẵn";
    } else {
        return "{$n} là số lẻ";
    }
}

$run = check_even(4);

echo "$run";

?>