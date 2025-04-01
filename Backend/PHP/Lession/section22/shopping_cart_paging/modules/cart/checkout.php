<?php
get_header();
$list_cart_buy = get_list_buy_cart();
$list_cart = get_cart();
// show_array($list_cart);

?>

<div id="main-content-wp" class="checkout-page ">
    <div class="wp-inner clearfix">
        <div id="sidebar" class="fl-left">
            <div id="main-menu-wp">
                <ul class="list-item">
                    <li class="active">
                        <a href="?page=home" title="Trang chủ">Trang chủ</a>
                    </li>
                    <li>
                        <a href="?page=detail_news" title="Giới thiệu">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="?page=category_product" title="">Laptop</a>
                    </li>
                    <li>
                        <a href="?page=category_product" title="">Điện thoại</a>
                    </li>
                    <li>
                        <a href="?page=category_product" title="">Máy tính bảng</a>
                    </li>
                    <li>
                        <a href="?page=detail_news" title="Liên hệ">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="content" class="fl-right">
            <div class="section" id="checkout-wp">
                <div class="section-head">
                    <h3 class="section-title">Thanh toán</h3>
                </div>
                <div class="section-detail">
                    <div class="wrap clearfix">
                        <form action="?mod=cart&act=send_mail" method="POST">
                            <div id="custom-info-wp" class="fl-left">
                                <h3 class="title">Thông tin khách hàng</h3>
                                <div class="detail">
                                    <div class="field-wp">
                                        <label>Họ tên</label>
                                        <input type="text" name="fullname" id="fullname">
                                    </div>
                                    <div class="field-wp">
                                        <label>Email</label>
                                        <input type="email" name="email" id="email">
                                    </div>
                                    <div class="field-wp">
                                        <label>Địa chỉ nhận hàng</label>
                                        <input type="text" name="address" id="address">
                                    </div>
                                    <div class="field-wp">
                                        <label>Số điện thoại</label>
                                        <input type="tel" name="tel" id="tel">
                                    </div>
                                    <div class="field-full-wp">
                                        <label>Ghi chú</label>
                                        <textarea name="note"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div id="order-review-wp" class="fl-right">
                                <h3 class="title">Thông tin đơn hàng</h3>
                                <div class="detail">
                                    <table class="shop-table">
                                        <thead>
                                            <tr>
                                                <td>Sản phẩm(<?php echo $list_cart['info']['num_order'] ?>)</td>
                                                <td>Tổng</td>
                                            </tr>
                                        </thead>
                                        <?php foreach ($list_cart_buy as $item) {
                                        ?>
                                            <tbody>
                                                <tr class="cart-item">
                                                    <td class="product-name"><?php echo $item['product_title'] ?><strong class="product-quantity"><?php echo "x" . $item['qty'] ?></strong></td>
                                                    <td class="product-total"><?php echo fomatPrice($item['sub_total']) ?></td>
                                                </tr>
                                                <input type="hidden" name="<?php echo $item['product_title']?>" value="<?php echo $item['product_title']; ?>">
                                                <input type="hidden" name="<?php echo $item['qty']?>" value="<?php echo $item['qty']; ?>">
                                                <input type="hidden" name="<?php echo $item['sub_total']?>" value="<?php echo $item['sub_total']; ?>">
                                                <!-- <tr class="cart-item">
                                                <td class="product-name">Iphone 6S Blue<strong class="product-quantity">x 1</strong></td>
                                                <td class="product-total">5,500,000đ</td>
                                            </tr> -->
                                            </tbody>
                                        <?php } ?>
                                        <tfoot>
                                            <tr class="order-total">
                                                <td>Tổng đơn hàng:</td>
                                                <td><strong class="total-price"><?php echo fomatPrice($list_cart['info']['total']) ?></strong></td>
                                                <input type="hidden" name="total_price" value="<?php echo $list_cart['info']['total']; ?>">
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div id="payment-checkout-wp">
                                        <ul id="payment_methods">
                                            <li>
                                                <input type="radio" checked="checked" id="direct-payment" name="payment" value="online">
                                                <label for="direct-payment">Thanh toán online</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="payment-home" name="payment" value="cod">
                                                <label for="payment-home">Thanh toán tại nhà</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="place-order-wp clearfix">
                                        <!-- <input type="submit" name="checkout" value="Đặt hàng"> -->
                                        <button type="submit" name="checkout">Đặt hàng</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>