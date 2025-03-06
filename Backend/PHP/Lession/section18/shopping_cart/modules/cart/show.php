<?php
get_header();
// show_array($_SESSION['cart']);
$list_buy = get_list_buy_cart();
?>
<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <h3 class="title">Giỏ hàng</h3>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <?php 
        if (!empty($list_buy)) {
        ?>
            <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">
                <form action="?mod=cart&act=update" method="POST">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Mã sản phẩm</td>
                                <td>Ảnh sản phẩm</td>
                                <td>Tên sản phẩm</td>
                                <td>Giá sản phẩm</td>
                                <td>Số lượng</td>
                                <td colspan="2">Thành tiền</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($_SESSION['cart']['buy'] as $item) {;?>
                            <tr>
                                <td><?php echo $item['code'];?></td>
                                <td>
                                    <a href="" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumb'];?>" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="?mod=product&act=detail&id=<?php echo $item['id'];?>" title="<?php echo $item['product_title'];?>" class="name-product"><?php echo $item['product_title'];?></a>
                                </td>
                                <td><?php echo fomatPrice($item['price']);?></td>
                                <td>
                                    <input type="number" name="qty[<?php echo $item['id'];?>]" min="1" max="10" value="<?php echo $item['qty'];?>" class="num-order">
                                </td>
                                <td><?php echo fomatPrice($item['sub_total']);?></td>
                                <td>
                                    <a href="?mod=cart&act=delete&id=<?php echo $item['id']?>" title="Xóa sản phẩm" class="del-product"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <?php };?>
                        </tbody>
                        <tfoot>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <p id="total-price" class="fl-right">Tổng giá: <span><?php echo fomatPrice(get_total_cart());?></span></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <div class="fl-right">
                                            <input type="submit" name="btn_update_cart" id="update-cart" value="Cập nhật giỏ hàng">
                                            <a href="?page=checkout" title="" id="checkout-cart">Thanh toán</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
            </div>
        </div>
        <div class="section" id="action-cart-wp">
            <div class="section-detail">
                <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                <a href="?page=home" title="" id="buy-more">Mua tiếp</a><br/>
                <a href="?mod=cart&act=delete_all" title="" id="delete-cart">Xóa giỏ hàng</a>
            </div>
        </div>
        <?php
        } else {
            ?>
            <p>Không có sản phẩm nào trong giỏ hàng</p>
        <?php    
        }
        ?>
    </div>
</div>
<?php
get_footer();
?>