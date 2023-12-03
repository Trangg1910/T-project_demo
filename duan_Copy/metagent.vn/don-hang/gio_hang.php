<?php
session_start();
?>

<main id="main" class="site-main">
    <form name="frm_cat" class="template-product" id="frm_cat" enctype="application/x-www-form-urlencoded" method="get" action="#" data-slug="danh-muc/all">
        <div class="breadcrumb breadcrumb-products">
            <div class="container">
                <ol class="breadcrumb__list br-none">
                    <li class="breadcrumb__item"><a class="breadcrumb__link" title="Trang chủ" href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb__item"><a class="breadcrumb__link" title="Tất cả sản phẩm" href="">Giỏ hàng</a></li>
                </ol>
            </div>
        </div>

        <section class="section-list-products product-page">
            <div class="container">
                <div>
                    <h1 class="title-page"><span class="title-gradient">Giỏ hàng</span></h1>
                </div>
                <style>
                    /* * {
                                margin: 0;
                                padding: 0;
                                -webkit-font-smoothing: antialiased;
                                -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
                                text-shadow: rgba(0, 0, 0, .01) 0 0 1px
                            } */
                    .btn_amount>button {
                        width: 25px;
                        background-color: #fff;
                        border: hidden;
                    }

                    .btn_amount {
                        display: flex;
                    }

                    .btn_amount input {
                        width: 38px;
                        height: 20px;
                        font-size: 12px;
                    }

                    body {
                        color: #000000
                    }

                    ul {
                        list-style: none;
                        margin-bottom: 0px
                    }

                    .button {
                        display: inline-block;
                        background: #0e8ce4;
                        border-radius: 5px;
                        height: 48px;
                        -webkit-transition: all 200ms ease;
                        -moz-transition: all 200ms ease;
                        -ms-transition: all 200ms ease;
                        -o-transition: all 200ms ease;
                        transition: all 200ms ease
                    }

                    .button a {
                        display: block;
                        font-size: 18px;
                        font-weight: 400;
                        line-height: 48px;
                        color: #FFFFFF;
                        padding-left: 35px;
                        padding-right: 35px
                    }

                    .button:hover {
                        opacity: 0.8
                    }

                    .cart_section {
                        width: 100%;

                        /* padding-top: 93px; */
                        /* padding-bottom: 111px */
                    }

                    .cart_title {
                        font-size: 30px;
                        font-weight: 500
                    }

                    .cart_items {
                        margin-top: 8px
                    }

                    .cart_list {
                        border: solid 1px #e8e8e8;
                        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
                        background-color: #fff
                    }

                    .cart_item {
                        width: 100%;
                        padding: 15px;
                        padding-right: 46px
                    }

                    .cart_item_image {
                        /* width: 133px;
                        height: 100px; */
                        float: left
                    }

                    .cart_item_image>img {
                        max-width: 100px;

                    }

                    .cart_item_info {
                        width: calc(100% - 133px);
                        float: left;
                        padding-top: 18px
                    }

                    .cart_item_name {
                        margin-left: 7.53%
                    }

                    .cart_item_title {
                        font-size: 14px;
                        font-weight: 400;
                        color: rgba(0, 0, 0, 0.5)
                    }

                    .cart_item_text {
                        font-size: 0.8rem;
                        margin-top: 35px
                    }

                    .cart_item_text span {
                        display: inline-block;
                        width: 20px;
                        height: 20px;
                        border-radius: 50%;
                        margin-right: 11px;
                        -webkit-transform: translateY(4px);
                        -moz-transform: translateY(4px);
                        -ms-transform: translateY(4px);
                        -o-transform: translateY(4px);
                        transform: translateY(4px)
                    }

                    .cart_item_price {
                        text-align: right
                    }

                    .cart_item_total {
                        text-align: right
                    }

                    .order_total {
                        width: 100%;
                        height: 60px;
                        margin-top: 30px;
                        border: solid 1px #e8e8e8;
                        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
                        padding-right: 46px;
                        padding-left: 15px;
                        background-color: #fff
                    }

                    .order_total_title {
                        display: inline-block;
                        font-size: 14px;
                        color: rgba(0, 0, 0, 0.5);
                        line-height: 60px
                    }

                    .order_total_amount {
                        display: inline-block;
                        font-size: 18px;
                        font-weight: 500;
                        margin-left: 26px;
                        line-height: 60px
                    }

                    .cart_buttons {
                        margin-top: 60px;
                        text-align: right
                    }

                    .cart_button_clear {
                        display: inline-block;
                        border: none;
                        font-size: 18px;
                        font-weight: 400;
                        line-height: 48px;
                        color: rgba(0, 0, 0, 0.5);
                        background: #FFFFFF;
                        border: solid 1px #b2b2b2;
                        padding-left: 35px;
                        padding-right: 35px;
                        outline: none;
                        cursor: pointer;
                        margin-right: 26px
                    }

                    .cart_button_clear:hover {
                        border-color: #0e8ce4;
                        color: #0e8ce4
                    }

                    .cart_button_checkout {
                        display: inline-block;
                        border: none;
                        font-size: 18px;
                        font-weight: 400;
                        line-height: 48px;
                        color: #FFFFFF;
                        padding-left: 35px;
                        padding-right: 35px;
                        outline: none;
                        cursor: pointer;
                        vertical-align: top
                    }
                </style>

                <div class="cart_section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="cart_container">
                                    <?php
                                    if (isset($_SESSION['cart'])) {
                                        $tong = 0;
                                        $i = 0;
                                        foreach ($_SESSION['cart'] as $key) {
                                            $tong = $tong + $key['total'];
                                            $get_color = get_color($key['color']);
                                            $get_size = get_size($key['size']);
                                            echo '
                                                    <div class="cart_items">
                                                <ul class="cart_list">
                                                    <li class="cart_item clearfix">
                                                        <div class="cart_item_image"><img
                                                                src="../img/' . $key['img'] . '" alt=""></div>
                                                        <div
                                                            class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                                            <div class="cart_item_name cart_info_col">
                                                                <div class="cart_item_title">Sản phẩm</div>
                                                                <div class="cart_item_text">' . $key['nameProduct'] . '</div>
                                                            </div>
                                                            <div class="cart_item_color cart_info_col">
                                                                <div class="cart_item_title">Màu</div>
                                                                <div class="cart_item_text">
                                                                    <span
                                                                    <label style="background: url(../img/' . $get_color['color_img'] . ')"></label>
                                                                </div>
                                                            </div>
                                                            <div class="cart_item_color cart_info_col">
                                                                <div class="cart_item_title">Size</div>
                                                                <div class="cart_item_text">' . $get_size['size'] . '</div>
                                                            </div>
                                                            <div class="cart_item_quantity cart_info_col">
                                                                <div class="cart_item_title">Số lượng</div>
                                                                
                                                            </div>
                                                            <div class="cart_item_price cart_info_col">
                                                                <div class="cart_item_title">Price</div>
                                                                <div class="cart_item_text">' . $key['price'] . '</div>
                                                            </div>
                                                            <div class="cart_item_total cart_info_col">
                                                                <div class="cart_item_title">Total</div>
                                                                <div class="cart_item_text">' . $key['total'] . '</div>
                                                            </div>
                                                            <div class="cart_item_total cart_info_col">
                                                                <div class="cart_item_title">Action</div>
                                                                <div class="cart_item_text"><a href="index.php?act=gio_hang&del=' . $i . '" class="btn btn-danger">Xóa</a></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                                    ';
                                            $i++;
                                        }
                                    }
                                    ?>
                                    <div class="order_total">
                                        <div class="order_total_content text-md-right">
                                            <div class="order_total_title">Order Total:</div>
                                            <div class="order_total_amount"><?php echo $tong ?></div>
                                        </div>
                                    </div>
                                    <div class="cart_buttons">
                                        <button type="button" class="button cart_button_clear">Continue
                                            Shopping</button>
                                        <button type="button" class="button cart_button_checkout">Add to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section>
    </form>
    



</main>