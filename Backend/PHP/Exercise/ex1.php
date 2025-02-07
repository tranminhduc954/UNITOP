<?php
//Khai báo biến
$fullName = 'Trần Minh Đức';
$userName = 'tranminhduc954';
$email = 'tranminhduc.hbh@gmail.com';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 1 PHP</title>
</head>
<body>
    <h1>Thông tin cá nhân</h1>
    <ul>
        <li>Họ và tên: <strong><?php echo "$fullName";?></strong></li>
        <li>Username: <strong><?php echo "$userName";?></strong></li>
        <li>Email: <strong><?php echo "$email";?></strong></li>
    </ul>
</body>
</html>