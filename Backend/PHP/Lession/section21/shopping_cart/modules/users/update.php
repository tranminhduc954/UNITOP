<?php
get_header();
get_sidebar();
// echo isset($_GET['id']) ? $_GET['id'] : "không có id";

$sql = "SELECT * FROM `tbl_users` WHERE `user_id` = {$_GET['id']}";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
// show_array($row);


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
        #main-content-wp {
            min-height: 300px;
        }
    </style>
    <h1>Danh sách thành viên</h1>
        <table class="table_data">
            <thead>
                <tr>
                    <td>Stt</td>
                    <td>Id</td>
                    <td>Fullname</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Gender</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo "1"?></td>
                    <td><?php echo $row['user_id']?></td>
                    <td><?php echo $row['fullname']?></td>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['gender']?></td>
                </tr>
            </tbody>
        </table>
</div>

<?php
get_footer();
?>