<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xây dựng điều hướng website</title>
    <!-- <link rel="stylesheet" href="./css/main.css"> -->
    <link rel="stylesheet" href="./css/pages.css">
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <a id="logo" href="">UNITOP</a>
            <p>Xin chào <strong><?php echo $_SESSION['user'];?></strong>
            (<a href="./pages/logout.php">Đăng xuất</a>)</p>
        </div>
        <ul class="main-menu">
            <li><a href="?page=home">Trang chủ</a></li>
            <li><a href="?page=about">Thông tin</a></li>
            <li><a href="?page=product">Sản phẩm</a></li>
            <li><a href="?page=services">Dịch vụ</a></li>
            <li><a href="?page=contact">Liên hệ</a></li>
        </ul>