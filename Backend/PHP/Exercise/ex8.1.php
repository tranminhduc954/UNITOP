<?php
// LUYỆN CODE FUNCTION
// Bài 1: Tính tổng các số trong mảng
// $numbers = [1, 2, 3, 4, 5];
// function sumArray($numbers) {
//     $total = 0;
//     foreach ($numbers as $item) {
//         $total += $item;
//     }
//     return $total; // trả về giá trị của hàm
// }
// echo sumArray($numbers); // in ra giá trị của hàm bằng echo (nếu không in thì không hiển thị kết quả ra html)

// Bài 2: Kiểm tra số nguyên tố
// function isPrime($number) {
//     if ($number <= 1) { // Nếu $number < 1 thì không phải là số nguyên tố
//         return false;
//     } else {
//         for ($i = 2; $i <= sqrt($number); $i++) { // Dùng vòng lặp for kiểm tra từ 2 > đến căn bậc 2 của số đó, nếu chia hết thì không phải và ngược lại
//             if ($number % $i == 0) {
//                 return false;
//             } else {
//                 return true;
//             }
//         }
//     }
// }

// echo isPrime(8) ? 'true' : 'false';

// Bài 3: Tìm giá trị lớn nhất trong mảng số nguyên
// $numbers = [3, 5, 9, 2, 12, 4, 1];
// // echo max($numbers);
// function findMax($arr) {
//     return max($arr);
// }

// echo findMax($numbers);
function factorial($number)
{
    if ($number < 0) {
        return 'Giai thừa là số nguyên dương không bao gồm: ' . $number;
    } elseif ($number == 0) {
        return 'Giai thừa của 0 là: 1';
    } else {
        $n = 1;
        for ($i = $number; $i >= 1; $i--) {
            $n *= $i;
        }
        return $n;
    }
}
echo factorial(3);
