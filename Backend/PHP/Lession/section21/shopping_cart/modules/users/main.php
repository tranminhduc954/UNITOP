<?php
get_header();
get_sidebar();
// Xuất dữ liệu từ DB lên
$sql = "SELECT * FROM `tbl_users`";
$result = mysqli_query($conn, $sql);
$list_user = [];
$num_rows = mysqli_num_rows($result);
if ( $num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list_user[] = $row;
    }
}
// show_array($list_user);

?>
<div id="main-content-wp" class="detail-news-page">
    <a class="add_new" href="?mod=users&act=add">Thêm mới</a>
    <br>
    <style>
        .table_data thead tr td {
            font-weight: bold;
            border-bottom: 1px solid #dedede;
            border-right: 1px solid #dedede;
            border-left: 1px solid #dedede;
            border-top: 1px solid #dedede;
        }

        .table_data tr td {
            border-bottom: 1px solid #dedede;
            border-right: 1px solid #dedede;
            border-left: 1px solid #dedede;
            border-top: 1px solid #dedede;
            padding: 8px 12px;
        }
    </style>
    <h1>Danh sách thành viên: (<?php echo "<strong>{$num_rows}</strong>";?> bản ghi)</h1>
    <?php if (!empty($list_user)) {
    ?>
        <table class="table_data">
            <thead>
                <tr>
                    <td>Stt</td>
                    <td>Id</td>
                    <td>Fullname</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Gender</td>
                    <td>Note</td>
                </tr>
            </thead>
            <?php
            $temp = 0;
            foreach ($list_user as $item) {
                $temp++;
                $item['url_update'] = "?mod=users&act=update&id={$item['user_id']}";
                $item['url_delete'] = "?mod=users&act=delete&id={$item['user_id']}";
                ?>
                <tbody>
                <tr>
                    <td><?php echo $temp?></td>
                    <td><?php echo $item['user_id']?></td>
                    <td><?php echo $item['fullname']?></td>
                    <td><?php echo $item['username']?></td>
                    <td><?php echo $item['email']?></td>
                    <td><?php echo $item['gender']?></td>
                    <td><a href="<?php echo $item['url_update']?>">Sửa</a> | <a href="<?php echo $item['url_delete']?>">Xóa</a></td>
                </tr>
            </tbody>
            <?php }?>
        </table>
    <?php } ?>
</div>

<?php
get_footer();
?>