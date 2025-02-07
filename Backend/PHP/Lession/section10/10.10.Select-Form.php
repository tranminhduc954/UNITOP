<?php
// Nhận dữ liệu từ select form
// B1: Kiểm tra xem có dữ liệu được gửi đi hay không;
// B2: Kiểm tra xem dữ liệu được gửi đi có rỗng hay không;
// B3: Lấy dữ liệu từ form
function show_arr($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
show_arr($_POST);

if (isset($_POST['pay'])) {
    if (!empty($_POST['pay'])) {
        $pay = $_POST['pay'];
        echo $pay;
    } else {
        echo 'Không có hình thức thanh toán nào được chọn';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dữ liệu từ Select form</title>
</head>

<body>
    <h1>Lựa chọn hình thức thanh toán</h1>
    <form action="" method="POST">
        <select name="pay" id="">
            <option value="">---Chọn hình thức---</option>
            <option value="cash">Tiền mặt</option>
            <option value="visa">Visa</option>
            <option value="master">Master Card</option>
            <option value="paypal">Paypal</option>
        </select>
        <input type="submit" name="btn-pay" value="payment">
    </form>
</body>

</html>