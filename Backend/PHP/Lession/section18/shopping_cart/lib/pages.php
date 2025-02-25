<?php
// Xây dựng hàm lấy id page
function get_page_by_id($id) {
    global $list_page;
    foreach ($list_page as $item) {
        if ($id == $item['id']) {
            return $item;
        }
    }
}


?>