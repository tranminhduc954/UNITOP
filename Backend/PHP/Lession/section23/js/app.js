$(document).ready(function () {
    $("#num_order, #price").on("input", function () {
        var num_order = $("#num_order").val();
        var price = $("#price").val();
        console.log("num_order:", num_order, "price:", price); // Phải in ra được giá trị

        if (num_order === "" || price === "" || num_order < 0 || price < 0) {
            $("#total").text("0");
            return;
        }

        $.ajax({
            url: 'process.php',
            method: 'POST',
            data: { num_order: num_order, price: price },
            success: function (data) {
                $("#total").text(data); // Truy cập vào phần tử có id #total để truyền dữ liệu vào
            },
            error: function (xhr, status, error) {
                console.log("Lỗi Ajax:", xhr.status, error);
                $("#total").text("Lỗi!");
            }
        });
    });
});
