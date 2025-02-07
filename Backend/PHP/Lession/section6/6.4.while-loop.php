<?php
// Vòng lặp while
// Là cấu trúc nhằm thực hiện chức năng mà không biết số lần lặp lại từ trước

// $i = 1; // Bắt đầu từ 1
// while ($i <= 10) { // Điều kiện
//     echo $i . "<br>"; // In giá trị của $i
//     $i++; // Tăng giá trị của $i lên 1
// }

// Bài toán tính tổng các số lẻ từ 0-10 bằng vòng lặp while
$total = 0;
$i = 0;
while ($i <= 10) {
    if ($i % 2 != 0) {
        $total+= $i; // Nếu i là số lẻ thì gán total = total + i;
    }
    $i++; // Tăng biến i lên 1 đơn vị rồi tiếp tục vòng lặp
}
echo $total;

?>