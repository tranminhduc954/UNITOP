<?php
// $path = "./template/temp.php";
// require_once $path;
getHeader()
?>
<div id="content">
    Home
    <?php
    show_array($_SESSION);
    show_array($_COOKIE);
    ?>
</div>
<?php
getFooter();
?>