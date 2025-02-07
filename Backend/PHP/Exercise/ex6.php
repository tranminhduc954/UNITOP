<?php
// Bài tập 6:
// 6.1: Tính tổng các số chẵn từ 1 đến n
// $total = 0;
// $n = 47;
// for ($i = 0; $i <= $n; $i++) {
//     if ($i %2== 0) {
//         $total += $i;
//     }
// }
// echo $total;

// 6.2: Tính tổng nghịch đảo các số chia hết cho 3 từ 3 đến n
// $total = 0;
// $n = 47;

// for ($i = 0; $i <= $n; $i++) {
//     if ($i != 0 && $i % 3 == 0) {
//         $total += 1 / $i;
//     }
// }
// echo $total;

// 6.3: Giải phương trình bậc 2:
// ax*2 + bx + c = 0
// B1. Tính Delta = b*2 - 4ac
// B2. Xét giá trị của Delta:
// -> Nếu Delta > 0 thì phương trình có hai nghiệm phân biệt: x1 = (-b + căn delta)/2*a; x2 = (-b - căn delta)/2*2
// -> Nếu Delta = 0 thì phương trình có nghiệm kép: x = -b/2*a
// -> Nếu Delta < 0 thì phương trình vô nghiệm
// $x = sqrt(9);
// echo $x;

// Khai báo hằng số
// $a = 1;
// $b = -3;
// $c = 2;
// // $x1 = 0;
// // $x2 = 0;

// // Tính delta
// $delta = ($b*$b) - 4*$a*$c;
// echo "Giá trị của Delta là: {$delta}";
// echo "<br>";

// // Xét điều kiện Delta
// if ($a != 0) {
//     if ($delta > 0) {
//         echo "Phương trình có hai nghiệm phân biệt";
//         echo "<br>";
//         echo "X1 = ".$x1 = (-$b + sqrt($delta))/(2*$a);
//         echo "<br>";
//         echo "X2 = ".$x2 = (-$b - sqrt($delta))/(2*$a);
//     } elseif ($delta == 0) {
//         echo "Phương trình có nghiệm kép";
//         echo "<br>";
//         echo "X1 = ".$x1 = -$b/(2*$a);
//         echo "X2 = ".$x2 = -$b/(2*$a);
//     } else {
//         echo "Phương trình vô nghiệm";
//         echo "<br>"; 
//     }
// } else {
//     echo "Tham số a < 0, đây không phải phương trình bậc 2";
// }

// 6.4: Tình tổng chuỗi: T3 = 1/2 + 2/3 + 3/4 +....+ n/n+1 (n>=1)
// $total = 0;
// $n = 6;
// for ($i = 2; $i <= $n; $i++) {
//     $total += $i/($i +1)
// }
// echo $total;

// 6.5: In dãy số từ 1 đến 100
// for ($i = 0; $i <= 100; $i++) {
//     echo $i;
//     echo "<br>";
// }
// $i = 0;
// while ($i <=100) {
//     echo $i++;
//     echo "<br>";
// }

// 6.6: Viết chương trình nhập vào số N từ người dùng, sau đó tính tổng các số từ 1 đến N.
// $total = 0;
// $n = 2;

// for ($i = 1; $i <= $n; $i++) {
//     $total += $i;
// }
// echo $total;

// 6.7: Sử dụng vòng lặp để in ra tất cả các số chẵn trong khoảng từ 1 đến 50.
// for ($i = 1; $i <= 50; $i++) {
//     if ($i %2== 0) {
//         echo $i;
//         echo "<br>";
//     }
// }

// 6.8: Sử dụng vòng lặp lồng nhau (for) để in bảng cửu chương từ 2 đến 9.
// for ($i = 2; $i <= 9; $i++) {
//     for ($j = 0; $j <= 10; $j++) {
//         echo "{$i} * {$j} = ".$i*$j;
//         echo "<br>";
//     }
// }

// ==================BÀI TẬP NÂNG CAO==================
// 6.9: Nhập vào hai số a và b từ người dùng. In ra tất cả các số nguyên tố trong khoảng từ a đến b.
// $a = 2;
// $b = 28;

// if ($a > 1) {
//     for ($i = $a; $i <= $b; $i++) {
//         $number = true; // Giả sử số này là số nguyên tố

//         for ($j = 2; $j <= sqrt($i); $j++) {
//             if ($i % $j == 0) {
//                 $number = false; // Không phải số nguyên tố
//                 break; // Thoát vòng lặp khi tìm thấy ước
//             }
//         }

//         if ($number) {
//             echo $i . " "; // In ra số nguyên tố
//         }
//     }
// } else {
//     echo "{$a} Không phải là số nguyên tố";
// }

// 6.10: Sử dụng vòng lặp để in hình tam giác số
// $a = 1;
// $b = 6;

// for ($i = $a; $i <= $b; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo $j;
//     }
//     echo "<br>"; // Xuống dòng sau khi lặp xong 1 vòng ở trong
// }

// 6.11: Nhập vào một số N, tính và in ra giai thừa của số đó (N!).
// $number = 5;
// for ($i = $number - 1; $i >= 1; $i--) {
//     $number *= $i;
// }
// echo $number;

// 6.12: Viết chương trình in hình tam giác ngược, ví dụ với n = 5:
// $n = 5;

// for ($i = $n; $i >= 1; $i--) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo $j;
//     }
//     echo "<br>";
// }

// 6.13: Viết chương trình in hình tam giác ngược, ví dụ với n = 5:
$n = 5;
for ($i = $n; $i >= 1; $i--) {
    for ($j = $i; $j >= 1; $j--) {
        echo "{$j} ";
    }
    echo "<br>";
}