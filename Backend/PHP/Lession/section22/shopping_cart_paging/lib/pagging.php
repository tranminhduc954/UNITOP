<?php
function get_pagging($num_page, $page, $base_url = "")
{
    $str_pagging = "<ul class='pagging'>";
    $join_char = (strpos($base_url, '?') !== false) ? '&' : '?';

    // Nút "Trước"
    if ($page > 1) {
        $prev = $page - 1;
        $str_pagging .= "<li><a href=\"{$base_url}{$join_char}page={$prev}\">Trước</a></li>";
    }

    // Các trang
    for ($i = 1; $i <= $num_page; $i++) {
        $active = ($i == $page) ? " style='font-weight:bold; background: #0056b3;'" : "";
        $str_pagging .= "<li><a href=\"{$base_url}{$join_char}page={$i}\"{$active}>{$i}</a></li>";
    }

    // Nút "Sau"
    if ($page < $num_page) {
        $next = $page + 1;
        $str_pagging .= "<li><a href=\"{$base_url}{$join_char}page={$next}\">Sau</a></li>";
    }

    $str_pagging .= "</ul>";
    return $str_pagging;
}



?>