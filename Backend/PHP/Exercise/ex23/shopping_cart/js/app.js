$(document).ready(function () {
    $(".num-order").on("input", function () {
        var row = $(this).closest(".cart-item");
        var quantity = parseInt($(this).val());
        var price = parseInt($(this).data("price"));
        var id = row.data("id");

        if (quantity < 0 || isNaN(quantity)) quantity = 0;

        // Tính thành tiền mới
        var sub_total = quantity * price;

        // Cập nhật lại HTML
        row.find(".sub-total").text(sub_total.toLocaleString('vi-VN') + "đ");

        // Tính lại tổng giỏ hàng
        var total = 0;
        $(".sub-total").each(function () {
            var text = $(this).text().replace(/[^\d]/g, "");
            total += parseInt(text);
        });

        $("#total_price span").text(total.toLocaleString('vi-VN') + "đ");

        // Gửi Ajax để cập nhật session (nếu muốn lưu ngay trên server)
        $.ajax({
            url: './process.php',
            method: 'POST',
            data: {
                product_id: id,
                qty: quantity
            },
            success: function (data) {
                console.log("Cập nhật thành công");
            },
            error: function () {
                console.log("Lỗi cập nhật server");
            }
        });
    });
});
