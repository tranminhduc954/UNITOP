<?php
function get_user($start, $num_per_page)
{
    $hostname = 'localhost:3307';
    $username = 'root';
    $password = '';
    $database = 'unitop.vn';

    $conn = mysqli_connect($hostname, $username, $password, $database);

    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

    // Lấy danh sách user giới hạn theo phân trang
    $sql = "SELECT * FROM tbl_user LIMIT {$start}, {$num_per_page}";
    $result = mysqli_query($conn, $sql);

    $users = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
    }

    // Lấy tổng số bản ghi không phân trang
    $count_result = mysqli_query($conn, "SELECT COUNT(*) as total FROM tbl_user");
    $count_row = mysqli_fetch_assoc($count_result);
    $total = $count_row['total'];

    mysqli_close($conn);

    return [
        'data' => $users,
        'total' => $total
    ];
}

?>
