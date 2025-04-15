<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Làm việc với Ajax</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <h1>Tính toán bằng Ajax</h1>
    <div>
        <label for="price">Giá</label>
        <input type="number" min="1" name="price" id="price" value="0">
        <br>
        <label for="num_order">Số lượng</label>
        <input type="number" min="0" max="20" name="num_order" id="num_order" value="0">
        <hr>
        <p>Tổng: <span id="total">0</span></p>
    </div>
    <script src="js/app.js"></script>
</body>

</html>