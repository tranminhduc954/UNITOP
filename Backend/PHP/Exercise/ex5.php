<?php

/**
 * Bài tập 5: Tạo một biến số nguyên a, nếu a là số nguyên dương chẵn thì tiến hành cộng thêm 1 giá trị và xuất kết quả ra người dùng
 * B1 -> Tạo biến a là số nguyên
 * B2 -> Dùng câu lệnh điều kiện kiểm tra a có là số chẵn hay không
 * B3 -> Nếu a là số chẵn thì tiến hành in ra a và cộng 1 giá trị
 */

$a = 4;

if ($a > 0 && $a % 2 == 0) {
    echo "a là số chẵn, giá trị mới của a sau khi tăng 1 đơn vị là: " . ++$a;
}
