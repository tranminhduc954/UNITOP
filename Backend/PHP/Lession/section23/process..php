<?php
if (isset($_POST['num_order'])) {
    $price = 10;
    $num_order = (int)$_POST['num_order'];
    $total = $price * $num_order;
    echo $total;
}
?>