<?php
// Switch-case trong PHP
// Bài toán ví dụ hiển thị ngày trong tuần dịch từ tiếng việt sang tiếng anh
$day = "Thứ 8";
switch ($day) {
    case "Thứ 2":
        echo "Monday";
        break;
    case "Thứ 3":
        echo "Tuesday";
        break;
    case "Thứ 4":
        echo "Wednesday ";
        break;
    case "Thứ 5":
        echo "Thursday";
        break;
    case "Thứ 6":
        echo "Friday";
        break;
    case "Thứ 7":
        echo "Saturday";
        break;
    default:
        echo "Sunday my love";
        break;
}
