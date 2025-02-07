<?php
// Câu lệnh điều khiển trong PHP
/**
 * Cấu trúc if:
 * if (biểu thức điều kiện) {
 *  code thực thi nếu biểu thức điều kiện đúng
 * }
 */
// $age = 18;
// if ($age >= 18) {
//     echo "Tuổi của bạn là: {$age}, vậy bạn đã đủ tuổi xem xxx";
// }

/**
 * Cấu trúc if-else
 * if (biểu thức điều kiện) {
 *  code thực thi nếu biểu thức điều kiện đúng
 * } else {
 *  code chạy khi biểu thức điều kiện sai
 * }
 */

/**
 * Cấu trúc if elseif else
 * ví dụ bài toán tính học lực học sinh trong thang điểm 10
 * 0 1 2 3 4 5 6 7 8 9 10
 * 0: Phải thi lại
 * 1 -> 4: Điểm D
 * 4.1 -> 6: Điểm C
 * 6.1 -> 7.9: Điểm B
 * 8 -> 10: Điểm A
 */
$score = 11;

if ($score <0 || $score > 10) {
    echo "Điểm đầu vào không hợp lệ";
} else {
    if ($score = 0 || $score < 1) {
        echo "Học sinh phải thi lại";
    } else {
        if ($score >= 1 && $score <= 4) {
            echo "Đạt điểm D";
        } elseif ($score >= 4.1 && $score <= 6) {
            echo "Đạt điểm C";
        } elseif ($score >= 6.1 && $score <= 7.9) {
            echo "Đạt điểm B";
        } else {
            echo "Đạt điểm A";
        }
    }
}


?>