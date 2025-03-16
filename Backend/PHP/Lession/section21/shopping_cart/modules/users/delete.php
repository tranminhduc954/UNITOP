<?php
get_header();
get_sidebar();
// echo isset($_GET['id']) ? $_GET['id'] : "không có id";

$sql = "SELECT * FROM `tbl_users` WHERE `user_id` = {$_GET['id']}";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
// show_array($row);


?>
<?php
get_footer();
?>