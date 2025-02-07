<?php
// Lấy giá trị của mảng
// Để truy cập vào 1 phần tử của mảng, ta sử dụng key của chúng
// $listNumber = array(2, 4, 6, 8, 10);
// echo $listNumber[0]; // truy cập vào phần tử có key = 0

$listUser = array(
    'id' => 1,
    'fullname' => 'Trần Minh Đức',
    'email' => 'tranminhduc.hbh@gmail.com'
);

// echo "<br>";
// echo $listUser['email']; // truy cập vào phần tử có key = 'email'

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lấy dữ liệu từ mảng</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Thông tin cá nhân</h1>
        <div>
            <p>ID: <strong><?php echo $listUser['id'];?></strong></p>
            <p>Họ và tên: <strong><?php echo $listUser['fullname'];?></strong></p>
            <p>Email: <strong><?php echo $listUser['email'];?></strong></p>
        </div>
        
        <script src="" async defer></script>
    </body>
</html>