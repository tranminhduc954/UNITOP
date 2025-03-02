<?php
get_header();

// Lấy id sản phẩm
$id = isset($_GET['id']) ? $_GET['id'] : '';
// echo $id;

// Lấy thông tin sản phẩm theo id
$product = get_product_by_id($id);
// show_array($product);

?>
<div id="main-content-wp" class="detail-product-page clearfix">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="info-product-wp">
                <div class="section-detail clearfix">
                    <div class="thumb fl-left">
                        <img src="<?php echo $product['product_thumb'];?>" alt="">
                    </div>
                    <div class="detail fl-right">
                        <h3 class="title"><?php echo $product['product_title'];?></h3>
                        <p class="price"><?php echo $product['price'];?></p>
                        <p class="product-code">Mã sản phẩm: <span><?php echo $product['code'];?></span></p>
                        <div class="desc-short">
                            <h5>Mô tả sản phẩm:</h5>
                            <p><?php echo $product['product_desc'];?></p>
                        </div>
                        <div class="num-order-wp">
                            <span>Số lượng:</span>
                            <input type="text" id="num-order" name="num-order" value="1">
                            <a href="?mod=cart&act=add&id=<?php echo $product['id'];?>" title="" class="add-to-cart">Thêm giỏ hàng</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="section" id="desc-wp">
                <div class="section-head">
                    <h3 class="section-title">Chi tiết sản phẩm</h3>
                </div>
                <div class="section-detail">
                    <p><?php echo $product['product_content'];?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>