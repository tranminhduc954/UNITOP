<?php
// // Tham số của hàm
// // Hàm không có tham số
// function hello() {
//     echo "Hello World";
// }

// hello();
// echo "<br>";


// // -> Hàm có 1 tham số
// function checkEven($a) {
//     if ($a % 2 == 0) {
//         echo "{$a} là số chẵn";
//     } else {
//         echo "{$a} là số lẻ";
//     }
// }
// checkEven(6);
// echo "<br>";

// // -> Hàm có 2 tham số
// function check_odd_between($a, $b) {
//     for ($i = $a; $i <= $b; $i++) {
//         if ($i % 2 != 0) {
//             echo $i." ";
//         }
//     }
// }
// // check_odd_between(2, 10);
// echo "Các số chẵn trong khoảng từ 2 đến 10 là: ";
// check_odd_between(2, 10);

// Nâng cao -> các hàm bổ trợ -> Tham số hàm tùy ý
// Bài toán ví dụ 1: Tạo hàm tính tổng nhiều số sum_multiple()
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    } else {
        echo "Giá trị không phải mảng";
    }
}

function sum_multiple()
{
    // echo func_num_args(); // Hàm đếm số phần tử trong mảng
    // echo "<br>";
    // echo func_get_arg(0); // Lấy value theo index
    // echo "<br>";
    // echo "<pre>";
    // print_r(func_get_args()); // Lấy mảng theo tham số hàm
    // echo "<pre>";
    // show_array(func_get_args());
    $t = 0; // B1 -> khai báo biến $t để lưu giá trị tổng
    foreach (func_get_args() as $item) { // B2 -> Duyệt qua mảng là 'hàm bổ trợ: func_get_args()' với các item
        $t += $item; // B3 -> Gán giá trị biến tạm sau mỗi lần lặp qua
    }
    echo $t; // B4 -> in ra giá trị $t ở cuối vòng lặp
}

sum_multiple(10, 20, 1, 2, 3); // -> $t = 10 + 20 + 1 + 2 + 3 = 36
echo "<br>";

// Bài toán ví dụ 2.1: Tạo hàm PHP in ra được cấu trúc HTML (input)
function input_html($name, $id, $value, $placeholder)
{
    // $name = func_get_arg(0);
    // $id = func_get_arg(1);
    // $value = func_get_arg(2);
    // $placeholder = func_get_arg(3);
    $html = "<input type='text' name='{$name}' id='{$id}' value='{$value}' placeholder='{$placeholder}'/>";
    echo $html;
}
// input_html(name: 'test', 'home-input', '', 'Nhập user vào đây');
input_html('test', 'input-home', '', 'không cần nhập vị trí');
echo "<br>";
echo "<br>";

// 2.2 
function create_html($type_html, $name, $inputArr = array(
    "id" => "",
    "value" => "",
    "placeholder" => ""
)) {
    $type_html = func_get_arg(0);
    $name = func_get_arg(1);
    $id = $inputArr['id'];
    $value = $inputArr['value'];
    $placeholder = $inputArr['placeholder'];
    //Tạo thẻ HTML
    $html = "<input type='{$type_html}' name='{$name}' id='{$id}' value='{$value}' placeholder='{$placeholder}'/>";
    echo $html;
};

create_html('text', 'input-user', $inputArr = array(
    'id'=> '01',
    'value'=> '',
    'placeholder'=> 'Nhập pass vào đây'
));