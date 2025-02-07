<?php
// Phép toán Logic trong PHP
$x = 10;
$y = 5;

// Phép toán and "&&"
echo "Phép toán AND '&&': ";
echo "<br>";
if ($x <= 10 && $y >= 5) {
    echo "Đúng";
} else {
    echo "Sai";
}
echo "<br>";

// Phép toán or "||"
echo "Phép toán OR '||': ";
echo "<br>";
if ($x = 10 || $y > 5) {
    echo "Đúng";
} else {
    echo "Sai";
}
echo "<br>";

// Phép toán XOR -> chỉ cần 1 vế hoặc cả 2 vế đúng là trả về true
echo "Phép toán XOR: ";
echo "<br>";
if ($x = 10 xor $y > 5) {
    echo "Đúng";
} else {
    echo "Sai";
}
echo "<br>";

// Phép toán phủ định
echo "Phép toán phủ định !";
echo "<br>";
if (!$x = 10) {
    echo "Sai";
} else {
    echo "Đúng";
}

?>