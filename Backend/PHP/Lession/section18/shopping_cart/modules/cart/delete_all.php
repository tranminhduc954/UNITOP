<?php

if (isset($_SESSION['cart']['buy'])) {
    unset($_SESSION['cart']);
}
header("Location: ?mod=cart&act=show");
exit;

?>