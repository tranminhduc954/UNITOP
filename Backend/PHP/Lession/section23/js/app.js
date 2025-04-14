$(document).ready(function () {
    $("#num_order").change(function () {
        var num_order = $("#num_order").val();
        var data = { num_order: num_order };
        // alert(data);
        $.ajax({
            url: 'process.php',
            method: 'POST',
            data: data,
            dataType: 'text',
            success: function (data) {
                $("#total").text(data);
            },
            error: function (xhr, status, error) {
                console.error("Ajax error: ", error);
            }
        });
    });
});
