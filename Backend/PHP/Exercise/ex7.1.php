<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách điện thoại</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
        }

        .product {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
        }

        .product:hover {
            transform: translateY(-5px);
        }

        .product img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-info {
            padding: 15px;
            text-align: center;
        }

        .product-info h3 {
            margin: 10px 0;
            font-size: 18px;
            color: #333;
        }

        .product-info p {
            font-size: 14px;
            color: #777;
            margin-bottom: 15px;
        }

        .product-info .price {
            font-size: 16px;
            color: #e74c3c;
            font-weight: bold;
        }

        .btn-buy {
            display: inline-block;
            padding: 10px 15px;
            background: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }

        .btn-buy:hover {
            background: #2980b9;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center; margin-top: 20px; color: #333;">Danh sách sản phẩm: Điện thoại</h1>
    <div class="product-list">
        <?php
        $listProduct = array(
            1 => array(
                'id' => 1,
                'img' => 'https://cdn2.fptshop.com.vn/unsafe/360x0/filters:quality(100)/samsung_galaxy_s24_ultra_2f8a5ee174.png',
                'name' => 'Samsung Galaxy S24 Ultra 5G',
                'info' => 'S24 Ultra là chiếc điện thoại Galaxy thông minh nhất từ trước đến nay',
                'price' => '23.490.000',
            ),
            2 => array(
                'id' => 2,
                'img' => 'https://cdn2.fptshop.com.vn/unsafe/360x0/filters:quality(100)/samsung_galaxy_z_fold6_thumb_3c94cadb15.png',
                'name' => 'Samsung Galaxy Z Fold6 5G 256GB',
                'info' => 'Z Fold6 đánh dấu một chuẩn mực mới trong thế giới điện thoại gập',
                'price' => '39.990.000',
            ),
            3 => array(
                'id' => 3,
                'img' => 'https://cdn2.fptshop.com.vn/unsafe/360x0/filters:quality(100)/samsung_galaxy_watch7_44mm_green_da4bc21dde.png',
                'name' => 'Samsung Galaxy Watch7 LTE 44mm',
                'info' => 'Thiết kế trang nhã với dây đeo lượn sóng',
                'price' => '7.490.000',
            ),
            4 => array(
                'id' => 4,
                'img' => 'https://cdn2.fptshop.com.vn/unsafe/360x0/filters:quality(100)/samsung_galaxy_s24_plus_9c167349d6.png',
                'name' => 'Samsung Galaxy S24 Plus 5G 256GB',
                'info' => 'Thiết kế chắc chắn, cảm hứng màu sắc lấy từ khoáng sản quý',
                'price' => '17.490.000',
            )
        );
        ?>
        <?php
        foreach ($listProduct as $item) {
        ?>
            <div class="product">
                <img src="<?php echo $item['img']; ?>" alt="Điện thoại 1">
                <div class="product-info">
                    <h3><?php echo $item['name']; ?></h3>
                    <p><?php echo $item['info']; ?></p>
                    <p class="price"><?php echo $item['price']; ?></p>
                    <a href="#" class="btn-buy">Mua ngay</a>
                </div>
            </div>
        <?php
        }
        ?>
        <!-- <div class="product">
            <img src="https://via.placeholder.com/250" alt="Điện thoại 2">
            <div class="product-info">
                <h3>Điện thoại B</h3>
                <p>Hiệu suất cao, camera sắc nét.</p>
                <p class="price">15,000,000 VND</p>
                <a href="#" class="btn-buy">Mua ngay</a>
            </div>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250" alt="Điện thoại 3">
            <div class="product-info">
                <h3>Điện thoại C</h3>
                <p>Pin dung lượng lớn, hỗ trợ 5G.</p>
                <p class="price">12,000,000 VND</p>
                <a href="#" class="btn-buy">Mua ngay</a>
            </div> -->
    </div>
    </div>
</body>

</html>