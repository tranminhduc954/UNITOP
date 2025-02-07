<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test CKEditor</title>
    <script src="./ckeditor/ckeditor.js"></script>
</head>

<body>
    <form action="#" method="POST">
        <h1>Form soạn thảo CKEditor</h1><br>
        <textarea id="content" name="content"></textarea>
        <br>
        <input type="submit" value="Gửi dữ liệu">
    </form>
    <br>
    <hr>
    <h2>Nội dung chi tiết</h2>
    <?php
    if (isset($_POST['content'])) {
        echo $_POST['content'];
    } else {
        echo "Chưa có dữ liệu";
    }
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            CKEDITOR.replace('content', {
                removePlugins: 'exportpdf' // Loại bỏ plugin nếu không cần
            });
        });
    </script>
</body>

</html>
