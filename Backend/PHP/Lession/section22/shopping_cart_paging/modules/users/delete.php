<?php
get_header();
get_sidebar();
// echo isset($_GET['id']) ? $_GET['id'] : "không có id";

// Lấy id từ url
$id = $_GET['id'];

// Truy vấn SQL và thực thi
$sql = "DELETE FROM `tbl_user` WHERE `user_id` = {$id}";
if (mysqli_query($conn, $sql)) {
    header("Location: ?mod=users&act=main");
} else {
    echo "Lỗi ".mysqli_error($conn);
}

?>
<?php
get_footer();
?>