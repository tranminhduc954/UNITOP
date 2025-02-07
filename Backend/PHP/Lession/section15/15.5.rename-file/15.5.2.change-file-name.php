<?php
// Your PHP code goes here
// $path = './15.5.1.index.php';
// require_once($path);


// Làm sạch tên file
$file_name = preg_replace('/[^a-zA-Z0-9\.\-_]/', '', $_FILES['file_upload']['name']);
$file_tmpname = $_FILES['file_upload']['tmp_name'];
$path_info = pathinfo($file_name); // Lấy thông tin file (tên + extension)
$file_dir = $upload_dir . $file_name;
$counter = 1;
// Kiểm tra trùng tên file
while (file_exists($file_dir)) {
    $file_name = $path_info['filename'] . '_' . $counter . '.' . $path_info['extension'];
    $file_dir = $upload_dir . $file_name;
    $counter++;
}
?>