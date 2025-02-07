<?php
// Bài 8: Xây dựng hàm kiểm tra số nguyên chẵn check_even() với $n là tham số;
// 8.1 -> Hàm in ra trực tiếp:
// - Đây là số nguyên chẵn
// - Đây là số nguyên lẻ
// function check_even($n) {
//     if (is_int($n)) {
//         if ($n %2== 0) {
//             echo "Đây là số nguyên chẵn";
//         } else {
//             echo "Đây là số nguyên lẻ";
//         }
//     } else {
//         echo "Đây không phải là số nguyên";
//     }
// }
// check_even(2);

// 8.2 -> Hàm trả về:
// - true nếu chẵn;
// - false nếu lẻ;
// function check_even($n) {
//     if (is_int($n)) {
//         if ($n %2== 0) {
//             return true;
//         } else {
//             return false;
//         }
//     } else {
//         echo "Đây không phải là số nguyên";
//     }
// }
// if (check_even(2)) {
//     echo "true";
// } else {
//     echo "false";
// }

// Bài 8.3: Tính tổng các số nguyên tố từ 2 -> $n ($n >= 2)
// check_prime();
// total_prime();
// function check_prime($n)
// {
//     if ($n < 2) {
//         return false; // Nếu n < 2 thì không phải số nguyên tố
//     }
//     for ($i = 2; $i <= sqrt($n); $i++) {
//         if ($n % $i == 0) {
//             return false; // Chạy vòng lặp từ 2 đến căn bậc 2 của n, nếu chia hết thì không phải số nguyên tố
//         }
//     }
//     return true; // Các trường hợp còn lại đều là số nguyên tố
// }
// // var_dump(check_prime(3));
// function total_prime($n) {
//     $t = 0;
//     for ($i = 2; $i <= $n; $i++) {
//         if (check_prime($i)) {
//             $t += $i; // Chạy vòng lặp từ 2 đến n, nếu check ra số nguyên tố thì gán biến t += i
//         }
//     }
//     return $t; // Trả về kết quả ở vòng lặp cuối
// }
// echo total_prime(10); // In ra giá trị ở vòng lặp cuối này

// Bài 8.4: Hàm lấy thông tin chi tiết một bài viết theo id trong mảng bài viết
// get_post_by_id();
$listProduct = array(
    1 => array(
        'id' => 1,
        'img' => 'https://cdn2.fptshop.com.vn/unsafe/360x0/filters:quality(100)/samsung_galaxy_s24_ultra_2f8a5ee174.png',
        'name' => 'Samsung Galaxy S24 Ultra 5G',
        'info' => 'S24 Ultra là chiếc điện thoại Galaxy thông minh nhất từ trước đến nay',
        'price' => '23.490.000',
    ),
    2 => array(
        'id' => 2,
        'img' => 'https://cdn2.fptshop.com.vn/unsafe/360x0/filters:quality(100)/samsung_galaxy_z_fold6_thumb_3c94cadb15.png',
        'name' => 'Samsung Galaxy Z Fold6 5G 256GB',
        'info' => 'Z Fold6 đánh dấu một chuẩn mực mới trong thế giới điện thoại gập',
        'price' => '39.990.000',
    ),
    3 => array(
        'id' => 3,
        'img' => 'https://cdn2.fptshop.com.vn/unsafe/360x0/filters:quality(100)/samsung_galaxy_watch7_44mm_green_da4bc21dde.png',
        'name' => 'Samsung Galaxy Watch7 LTE 44mm',
        'info' => 'Thiết kế trang nhã với dây đeo lượn sóng',
        'price' => '7.490.000',
    ),
    4 => array(
        'id' => 4,
        'img' => 'https://cdn2.fptshop.com.vn/unsafe/360x0/filters:quality(100)/samsung_galaxy_s24_plus_9c167349d6.png',
        'name' => 'Samsung Galaxy S24 Plus 5G 256GB',
        'info' => 'Thiết kế chắc chắn, cảm hứng màu sắc lấy từ khoáng sản quý',
        'price' => '17.490.000',
    )
);

echo "<pre>";
print_r($listProduct);
echo "<pre>";

function get_post_by_id($arr, $id) { // Khai báo hàm với 2 tham số là $arr, $id
    // global $listProduct;
    foreach ($arr as $key => $value) {
        return $arr[$id]; // Chạy vòng lặp qua mảng $arr -> truy cập vào key và trả về value
    }
}
echo "<pre>";
print_r(get_post_by_id($listProduct, 1));
echo "<pre>";