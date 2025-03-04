<?php
get_header();
// show_array($list_product);

global $list_product;
global $list_product_cat;

$list_product_macbook = get_list_product_by_id(2);

$list_product_phone = get_list_product_by_id(1);

?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $list_product_cat[2]['cat_title'];?></h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php foreach($list_product_macbook as $item) {?>
                        <li>
                            <a href="?mod=product&act=detail&id=<?php echo $item['id'];?>" title="" class="thumb">
                                <img src="<?php echo $item['product_thumb']?>" alt="">
                            </a>
                            <a href="?mod=product&act=detail&id=<?php echo $item['id'];?>" title="" class="title"><?php echo $item['product_title']?></a>
                            <p class="price"><?php echo fomatPrice($item['price']);?></p>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $list_product_cat[1]['cat_title'];?></h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">mm
                        <?php foreach($list_product_phone as $item) {?>
                        <li>
                            <a href="?mod=product&act=detail&id=<?php echo $item['id'];?>" title="" class="thumb">
                                <img src="<?php echo $item['product_thumb']?>" alt="">
                            </a>
                            <a href="?mod=product&act=detail&id=<?php echo $item['id'];?>" title="" class="title"><?php echo $item['product_title']?></a>
                            <p class="price"><?php echo fomatPrice($item['price']);?></p>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <!-- <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title">Máy tính bảng</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</div>
<?php
get_footer();
?>