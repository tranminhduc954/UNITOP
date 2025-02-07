<?php
// B1: Tính số trang $num_page hiển thị khi có tổng số bài $total_post và số bài trên mỗi trang $num_per_page
// VD: 1 trang có 3 bài viết -> $num_per_page = 3; có 10 bài viết -> $total_post = 10; hỏi có bao nhiêu trang -> $num_page = ?
// -> logic bài toán
// $total_post = 10;
// $num_per_page = 3;
// $num_page = $total_post / $num_per_page;
// echo ceil($num_page);

// function count_num_pages($total_post, $num_per_page) {
//     if ($total_post > 0 && $num_per_page >= 1) {
//         return ceil($total_post / $num_per_page);
//     } else {
//         return 0;
//     }
// }
// echo count_num_pages(10, 4);


// B2: Xuất một mảng số nguyên chẵn từ một mảng số nguyên cho trước
// -> logic bài toán
// $list_number = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
// $my_array = [];
// foreach ($list_number as $key => $value) {
//     if ($value % 2== 0) {
//         $my_array[] = $value;
//     }
// }
// echo "<pre>";
// print_r($my_array);
// echo "<pre>";
// $list_number = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
// function array_even($data)
// {
//     $arr = [];    if (is_array($data)) {
//         foreach ($data as $key => $value) {
//             if ($value % 2 == 0) {
//                 $arr[] = $value;
//             }
//         }
//     }
//     return $arr;
// }
// echo "<pre>";
// print_r(array_even($list_number));
// echo "<pre>";

// B3: Hiển thị danh sách mảng, danh mục theo đa cấp $list_post
// $list_post = ['Giáo dục', 'Khuyến học', 'Du học', 'Thể thao', 'Châu Âu', 'Châu Á'];
// $level = str_repeat('-', 2);

// // echo "<pre>";
// // print_r($list_post);
// // echo "<pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Post</title>
</head>
<body>
    <ul>
        <li><?php echo $list_post[0];?></li>
        <li><?php echo $level.' '.$list_post[1];?></li>
        <li><?php echo $level.' '.$list_post[2];?></li>
        <li><?php echo $list_post[3];?></li>
        <li><?php echo $level.' '.$list_post[4];?></li>
        <li><?php echo $level.' '.$list_post[5];?></li>
    </ul>
</body>
</html>