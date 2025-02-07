<?php
// Duyệt mảng - Lặp qua mảng
// -> Giúp chạy qua các phần tử của mảng
// -> Tác động và xử lý các yêu cầu liên quan đến phần tử của mảng (Xuất dữ liệu, tính toán...)
/**
 * Cấu trúc duyệt mảng:
 * foreach($myArray as $key => $value) {
 *  // Code xử lý các phần tử của mảng
 * }
 * // Nếu không dùng đến $key thì có thể không đưa vào
 */

// Duyệt mảng 1 chiều
// $listNumber = array(2, 4, 6, 8, 10);
// foreach ($listNumber as $number) {
//     echo "{$number}"."<br>";
// };

// Duyệt mảng đa chiều
$listUser = array(
    1 => array(
        'id' => 1,
        'name' => 'Trần Minh Đức',
        'email' => 'tranminhduc.hbh@gmail.com',
        'phone' => '0859616768'
    ),
    2 => array(
        'id' => 2,
        'name' => 'Nguyễn Thùy Linh',
        'email' => 'linhnt.hbh@gmail.com',
        'phone' => '0827788688'
    )
);

foreach ($listUser as $key => $item) {
    echo $item['name']."<br>";
    echo $item['email']."<br>";
    echo $item['phone']."<br>";
    echo "<br>";
}
