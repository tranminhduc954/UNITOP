<?php
// Các hàm về mảng có sẵn trong PHP
/**
 * is_array($arr) -> kiểm tra xem một biến có phải là mảng hay không (trả về giá trị boolean) -> VD: is_array([1, 2, 3]) = true;
 * 
 * in_array($arr) -> kiểm tra xem một phần tử có trong mảng hay không 
 * -> VD: $arr = [1, 2, 3]; echo in_array(1, $arr) -> true;
 * 
 * count($arr) -> đếm số phần tử (value) trong mảng -> VD: count(['a', 'b', 'c']) = 3;
 * 
 * array_key_exists($key, $array) -> Kiểm tra xem một key có tồn tại trong mảng hay không 
 * -> VD: array_key_exists('name', ['name' => 'John']) → true
 * -> VD: 
 * <?php
 * $myArr = array('id' => 1, 'fullname' => 'Trần Minh Đức');
 * if (array_key_exists('fullname', $myArrr)) {
 *  echo 'Tồn tại key fullname trong mảng $myArr';
 * }
 * ?>
 * 
 * array_merge($arr_1, $arr_2) -> ghép hai mảng với nhau
 * 
 * array_values($array) -> Lấy tất cả các giá trị (value) từ mảng -> VD: array_values(['a' => 1, 'b' => 2]) → [1, 2]
 * 
 */