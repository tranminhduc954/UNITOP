<?php
get_header();
?>

<div id="layout">
    <aside id="side">
        <?php get_sidebar(); ?>
    </aside>

    <main id="main-content-wp" class="detail-news-page">
        <a class="add_new" href="?mod=users&act=add">Thêm mới</a>

        <?php
        // Số lượng bản ghi trên trang
        $num_per_page = 5;

        // Điểm xuất phát
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $start = ($page - 1) * $num_per_page;

        // Điểm kết thúc
        $end = ($page * $num_per_page) - 1;

        // Gọi hàm get_users
        $data = get_user($start, $num_per_page);
        $list_user = $data['data'];
        $num_rows = $data['total'];

        // Tổng số bản ghi
        $total_rows = $num_rows;

        // Tính tổng số trang
        $num_page = ceil($total_rows / $num_per_page);

        // echo "<br>";
        // echo "Trang hiện tại: <strong>{$page}</strong>";
        // echo "<br>";
        // echo "Số thứ tự bắt đầu trang <strong>{$page}</strong> là: <strong>{$start}</strong>";
        // echo "<br>";
        // echo "Số thứ tự kết thúc trang <strong>{$page}</strong> là: <strong>{$end}</strong>";

        ?>

        <h1>Danh sách thành viên: (<strong><?php echo $num_rows; ?></strong> bản ghi)</h1>

        <?php if (!empty($list_user)) { ?>
            <table class="table_data">
                <thead>
                    <tr>
                        <th>Stt</th>
                        <th>Id</th>
                        <th>Fullname</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Note</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $temp = $start; // Đánh số thứ tự
                    foreach ($list_user as $item) {
                        $temp++;
                        $url_update = "?mod=users&act=update&id={$item['user_id']}";
                        $url_delete = "?mod=users&act=delete&id={$item['user_id']}";
                    ?>
                        <tr>
                            <td><?php echo $temp; ?></td>
                            <td><?php echo $item['user_id']; ?></td>
                            <td><?php echo $item['fullname']; ?></td>
                            <td><?php echo $item['username']; ?></td>
                            <td><?php echo $item['email']; ?></td>
                            <td><?php echo $item['gender']; ?></td>
                            <td>
                                <a href="<?php echo $url_update; ?>">Sửa</a> |
                                <a href="<?php echo $url_delete; ?>" onclick="return confirm('Bạn có chắc muốn xóa không?')">Xóa</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php
                echo get_pagging($num_page, $page, "?mod=users&act=main");
            ?>
        <?php } else { ?>
            <p>Không có dữ liệu thành viên.</p>
        <?php } ?>
    </main>
</div>

<?php get_footer(); ?>

<style>
    /* Layout chia 7:3 */
    #layout {
        display: flex;
        gap: 20px;
        max-width: 1200px;
        margin: auto;
    }

    #side {
        flex: 2;
    }

    #side li {
        width: 200px;
    }

    #main-content-wp {
        flex: 8;
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Định dạng bảng */
    .table_data {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .table_data thead tr {
        background-color: #007bff;
        color: white;
        text-align: left;
    }

    .table_data thead th {
        font-weight: bold;
        padding: 12px 15px;
    }

    .table_data tbody td {
        border-bottom: 1px solid #ddd;
        padding: 10px 15px;
    }

    .table_data tbody tr:hover {
        background-color: #f1f1f1;
    }

    /* Nút thêm mới */
    .add_new {
        display: inline-block;
        padding: 10px 15px;
        background-color: #28a745;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: 0.3s;
    }

    .add_new:hover {
        background-color: #218838;
    }

    /* Phân trang */
    .pagging {
        display: flex;
        list-style: none;
        padding: 10px 0;
        justify-content: center;
        margin-top: 15px;
    }

    .pagging li {
        margin: 0 5px;
    }

    .pagging a {
        display: block;
        padding: 8px 12px;
        background: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: 0.3s;
    }

    .pagging a:hover {
        background: #0056b3;
    }

    /* Đáp ứng mobile */
    @media (max-width: 768px) {
        #layout {
            flex-direction: column;
        }

        #side,
        #main-content-wp {
            flex: 1;
        }
    }
</style>