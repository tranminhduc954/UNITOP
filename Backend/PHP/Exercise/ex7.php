<?php
// Bài tập 7 - Mảng nâng cao
// 7.1: Tạo mảng lưu các số lẻ từ 3 -> 150;
// 7.2: Tạo mảng đa chiều lưu trữ các bài viết trong website tin tức
// 7.3: Tạo mảng đa chiều lưu trữ các sản phẩm trong website bán hàng
// 7.4: Hiển thị danh sách bài viết lên giao diện
// 7.5: Hiển thị danh sách sản phẩm lên giao diện

// 7.1:
// $list_odd = array();
// for ($i = 3; $i <= 150; $i++) {
//     if ($i %2 != 0) {
//         $list_odd[] += $i;
//     }
// };
// echo "<pre>";
// print_r($list_odd);
// echo "<pre>";

// 7.2:
$list_post = array(
    1 => array(
        'header' => 'Bộ GD&ĐT yêu cầu đánh giá lại luận án tiến sĩ bị tố đạo văn',
        'img' => 'https://cdnphoto.dantri.com.vn/sIWhzONzojj4pBhTxP45VX8mYXA=/thumb_w/1020/2024/12/14/luan-an-tien-si-dao-van-vi-thao-edited-1734168074211.jpeg',
        'body' => 'Sau khi xem xét kết luận giải quyết đơn thư tố cáo của Giám đốc Đại học Huế, Bộ Giáo dục và Đào tạo yêu cầu nhà trường tổ chức đánh giá lại nội dung luận án của bà L.T.A.H., từ đó xác định hình thức kỷ luật đối với tiến sĩ này.',
        'footer' => 'Trước đó, Bộ Giáo dục và Đào tạo nhận được báo cáo từ Đại học Huế về kết quả giải quyết đơn tố cáo của ông N.T.A.P. (trú thành phố Huế); đồng thời kiến nghị Bộ lập hội đồng thẩm định nội dung luận án của tiến sĩ L.T.A.H..',
    ),
    2 => array(
        'header' => 'Vì sao Israel kiểm soát đỉnh núi cao nhất Syria sau khi Damascus thất thủ?',
        'img' => 'https://cdnphoto.dantri.com.vn/B_wXVr4dBCH4zTy-_uGIsmRgiCg=/thumb_w/1020/2024/12/14/israelinsyria-1733748332508-1734180121372.png',
        'body' => 'Sau khi chính quyền ông Assad bị lật đổ vào cuối tuần trước, Israel nhanh chóng ném bom tất cả các tài sản quân sự của Syria mà họ tuyên bố là muốn ngăn chúng lọt vào tay các đối thủ trong khu vực.',
        'footer' => 'Ngoài ra, Israel cũng nhanh chóng đưa quân tới Hermon, đỉnh núi cao nhất Syria ở vùng đệm tại cao nguyên Golan. Bất chấp sự chỉ trích từ các nước vì đưa lực lượng vào lãnh thổ Syria, Israel tuyên bố việc họ hiện diện "tạm thời" tại đây là vì lý do an ninh và họ sẽ rút đi khi an ninh ở biên giới nước này được đảm bảo.',
    ),
    3 => array(
        'header' => 'Gỡ vướng cho 154 dự án điện mặt trời từng bị thanh tra là cấp thiết',
        'img' => 'https://cdnphoto.dantri.com.vn/Ci4MoNx8PAEAnB0-83F_XIDXBRI=/2024/12/14/img4118-17340015518331278997215-1734110188934.jpg',
        'body' => 'Người đứng đầu Chính phủ khẳng định rằng chủ trương gỡ vướng này để không lãng phí nguồn lực xã hội, giữ niềm tin của nhà đầu tư trong và ngoài nước. Do đó, các bên cần hạn chế tranh chấp, khiếu kiện, ảnh hưởng đến môi trường đầu tư, đảm bảo an ninh trật tự, an ninh năng lượng quốc gia và hài hòa lợi ích.',
        'footer' => 'Người đứng đầu Chính phủ khẳng định rằng chủ trương gỡ vướng này để không lãng phí nguồn lực xã hội, giữ niềm tin của nhà đầu tư trong và ngoài nước. Do đó, các bên cần hạn chế tranh chấp, khiếu kiện, ảnh hưởng đến môi trường đầu tư, đảm bảo an ninh trật tự, an ninh năng lượng quốc gia và hài hòa lợi ích.',
    ),
    4 => array(
        'header' => 'Georgia bầu cựu cầu thủ bóng đá cực hữu làm tổng thống',
        'img' => 'https://cdnphoto.dantri.com.vn/_i8OQh3P9fIYIcasc69H0LGBOX0=/thumb_w/1020/2024/12/14/c12919777790-1734176382210.jpg',
        'body' => 'Ông Mikheil Kavelashvili, 53 tuổi, là cựu nghị sĩ của đảng cầm quyền Georgian Dream và đã chơi cho đội bóng đá Anh Manchester City trong những năm 1990. Ông là ứng cử viên duy nhất trong cuộc đua.',
        'footer' => 'Lần đầu tiên, tổng thống nước này không được bầu thông qua bầu cử quốc gia mà thông qua quốc hội thông, dựa trên lá phiếu trực tiếp của 300 đại biểu bầu cử gồm các đại biểu quốc hội và đại diện của chính quyền địa phương.',
    ),
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 7</title>
    <style>
        /* Thêm CSS để tạo kiểu cho các bài viết */
        div {
            width: 80%;
            max-width: 600px;
            margin: 20px auto;
            padding: 15px;
            background-color: #f4f4f4;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        h2 {
            font-size: 1.6em;
            color: #333;
        }

        p {
            font-size: 1em;
            color: #555;
            line-height: 1.6;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    
    <?php
    foreach ($list_post as $item) {
    ?>
        <div>
            <h2><?php echo $item['header']; ?></h2>
            <img src="<?php echo $item['img']; ?>" alt="">
            <p><?php echo $item['body']; ?></p>
            <p><?php echo $item['footer']; ?></p>
        </div>
    <?php
    };
    ?>
</body>

</html>