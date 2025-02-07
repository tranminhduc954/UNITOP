<?php
// Vòng lặp for trong PHP
// Cấu trúc vòng lặp for:
/**
 * for (Giá trị bắt đầu biến đếm; Biểu thức điều kiện; Cập nhật biến đếm) {
 *  // Đoạn code thực thi;
 * }
 * 
 * Trong đó:
 * -> Giá trị bắt đầu biến đếm: là giá trị khởi động
 * -> Biểu thức điều kiện: là điều kiện thực hiện, quyết định số lần vòng lặp thực hiện
 * -> Cập nhật biến đếm: thay đổi biến đếm sau mỗi vòng lặp -> cho đến khi chạm đến giới hạn vòng lặp và ngừng lại
 */
// Bài toán ví dụ cho vòng lặp: Tính tổng các số chẵn từ 0 -> 10
// $total = 0;

// for ($i = 0; $i <= 10; $i++) {
//     if ($i %2== 0) {
//         $total += $i;
//     }
// }
// echo $total;

// Vẽ tam giác số
$n = 6;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}


?>