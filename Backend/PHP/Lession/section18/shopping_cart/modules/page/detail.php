<?php
get_header();

// lấy id từ url
$id = isset($_GET['id']) ? $_GET['id'] : 0;
// gọi hàm lấy dữ liệu từ id
$item = get_page_by_id($id);
// show_array($item);

?>
<div id="main-content-wp" class="detail-news-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="detail-news-wp">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $item['page_title'];?></h3>
                </div>
                <div class="section-detail">
                    <p class="create-date"><?php echo $item['created_at'];?></p>
                    <div class="content-news">
                    <?php echo $item['post_content'];?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>