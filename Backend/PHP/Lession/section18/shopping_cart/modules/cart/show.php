<?php
get_header();
// show_array($_SESSION['cart']);
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
        <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">
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
                                <a href="" title="" class="name-product"><?php echo $item['product_title'];?></a>
                            </td>
                            <td><?php echo fomatPrice($item['price']);?></td>
                            <td>
                                <input type="text" name="num-order" value="<?php echo $item['qty'];?>" class="num-order">
                            </td>
                            <td><?php echo fomatPrice($item['sub_total']);?></td>
                            <td>
                                <a href="" title="" class="del-product"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <?php };?>
                        <!-- <tr>
                            <td>HCA00032</td>
                            <td>
                                <a href="" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                            </td>
                            <td>
                                <a href="" title="" class="name-product">Đồ chơi trẻ em dưới 1 tuổi</a>
                            </td>
                            <td>7.000.000đ</td>
                            <td>
                                <input type="text" name="num-order" value="1" class="num-order">
                            </td>
                            <td>7.000.000đ</td>
                            <td>
                                <a href="" title="" class="del-product"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>HCA00032</td>
                            <td>
                                <a href="" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                            </td>
                            <td>
                                <a href="" title="" class="name-product">Đồ chơi trẻ em dưới 1 tuổi</a>
                            </td>
                            <td>7.000.000đ</td>
                            <td>
                                <input type="text" name="num-order" value="1" class="num-order">
                            </td>
                            <td>7.000.000đ</td>
                            <td>
                                <a href="" title="" class="del-product"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr> -->
                    </tbody>
                    <tfoot>
                            <td colspan="7">
                                <div class="clearfix">
                                    <p id="total-price" class="fl-right">Tổng giá: <span><?php echo fomatPrice($_SESSION['cart']['info']['total']);?></span></p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <div class="fl-right">
                                        <a href="" title="" id="update-cart">Cập nhật giỏ hàng</a>
                                        <a href="?page=checkout" title="" id="checkout-cart">Thanh toán</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="section" id="action-cart-wp">
            <div class="section-detail">
                <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                <a href="?page=home" title="" id="buy-more">Mua tiếp</a><br/>
                <a href="" title="" id="delete-cart">Xóa giỏ hàng</a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>