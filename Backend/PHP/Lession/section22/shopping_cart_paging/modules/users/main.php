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
        // Kiểm tra kết nối
        if (!isset($conn)) {
            die("Lỗi kết nối CSDL");
        }

        // Truy vấn dữ liệu
        $sql = "SELECT * FROM tbl_user";
        $result = mysqli_query($conn, $sql);
        $list_user = [];
        $num_rows = mysqli_num_rows($result);

        if ($num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $list_user[] = $row;
            }
        }

        // Số lượng bản ghi trên trang
        $num_per_page = 5;
        
        // Tổng số bản ghi
        $total_rows = $num_rows;

        // Tính tổng số trang
        $num_page = ceil($total_rows/$num_per_page);
        
        // Điểm xuất phát
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $start = ($page -1) * $num_per_page;

        echo "Trang hiện tại {$page}";
        echo "<br>";
        echo "trị số bản ghi bắt đầu {$start}";
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
                    $temp = 0;
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

            <ul class="pagging">
                <li><a href="#">Trước</a></li>
                <li><a href="?mod=users&act=main&page=1">1</a></li>
                <li><a href="?mod=users&act=main&page=2">2</a></li>
                <li><a href="?mod=users&act=main&page=3">3</a></li>
                <li><a href="?mod=users&act=main&page=4">4</a></li>
                <li><a href="#">Sau</a></li>
            </ul>
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