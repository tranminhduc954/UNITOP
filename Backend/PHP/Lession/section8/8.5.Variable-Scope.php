<?php
// Tầm vực của biến trong hàm
// 1. Biến cục bộ -> local
// function sum($a, $b) {
//     return $a + $b;
// }
// echo sum(1, 2);

// 2. Biến toàn cục -> global
$a = 10;
$b = 20;
// function sum() {
//     global $a, $b;
//     return $a + $b;
// }
// echo sum();

// function sum() {
//     return $GLOBALS['a'] + $GLOBALS['b'];
// }
// echo sum();

// function sum() {
//     global $a, $b;
//     return $a + $b;
// }
// echo sum();

?>