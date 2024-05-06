<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>


    <main class="main-wrapper">

        <!-- Start Cart Area  -->
        <div class="axil-product-cart-area axil-section-gap">
            <div class="container">
                <div class="axil-product-cart-wrap">
                    <div class="product-table-heading">
                        <h4 class="title">Keranjang Anda</h4>
                        <a href="#" class="cart-clear">Hapus Keranjang Belanja</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table axil-product-table axil-cart-table mb--40">
                            <thead>
                                <tr>
                                    <th scope="col" class="product-remove"></th>
                                    <th scope="col" class="product-thumbnail">Produk</th>
                                    <th scope="col" class="product-title"></th>
                                    <th scope="col" class="product-price">Harga</th>
                                    <th scope="col" class="product-quantity">Jumlah</th>
                                    <th scope="col" class="product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-remove"><a href="#" class="remove-wishlist"><i
                                                class="fal fa-times"></i></a></td>
                                    <td class="product-thumbnail"><a href="single-product.html"><img
                                                src="<?php base_url() ?>/images/product/electric/product-01.png"
                                                alt="Digital Product"></a></td>
                                    <td class="product-title"><a href="single-product.html">Sneaker</a></td>
                                    <td class="product-price" data-title="Price"><span class="">Rp </span>250.000</td>
                                    <td class="product-quantity" data-title="Qty">
                                        <div class="pro-qty">
                                            <input type="number" class="quantity-input" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal"><span class="">Rp </span>250.000
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-remove"><a href="#" class="remove-wishlist"><i
                                                class="fal fa-times"></i></a></td>
                                    <td class="product-thumbnail"><a href="single-product-2.html"><img
                                                src="<?php base_url() ?>/images/product/electric/product-02.png"
                                                alt="Digital Product"></a></td>
                                    <td class="product-title"><a href="single-product-2.html">Ortuseight</a></td>
                                    <td class="product-price" data-title="Price"><span class="">Rp </span>350.000</td>
                                    <td class="product-quantity" data-title="Qty">
                                        <div class="pro-qty">
                                            <input type="number" class="quantity-input" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal"><span class="">Rp </span>350.000
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-remove"><a href="#" class="remove-wishlist"><i
                                                class="fal fa-times"></i></a></td>
                                    <td class="product-thumbnail"><a href="single-product-3.html"><img
                                                src="<?php base_url() ?>/images/product/electric/product-03.png"
                                                alt="Digital Product"></a></td>
                                    <td class="product-title"><a href="single-product-3.html">Specs</a></td>
                                    <td class="product-price" data-title="Price"><span class="">Rp </span>200.000</td>
                                    <td class="product-quantity" data-title="Qty">
                                        <div class="pro-qty">
                                            <input type="number" class="quantity-input" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal"><span class="">Rp</span>200.000
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-update-btn-area">
                        <div class="input-group product-cupon">
                            <input placeholder="" type="text">
                            <!-- <div class="product-cupon-btn">
                                <button type="submit" class="axil-btn btn-outline">Berlaku</button>
                            </div> -->
                        </div>
                        <div class="update-btn">
                            <a href="#" class="axil-btn btn-outline">Perbarui Keranjang</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 offset-xl-7 offset-lg-5">
                            <div class="axil-order-summery mt--80">
                                <h5 class="title mb--20">Ringkasan Pesanan</h5>
                                <div class="summery-table-wrap">
                                    <table class="table summery-table mb--30">
                                        <tbody>
                                            <tr class="order-subtotal">
                                                <td>Total</td>
                                                <td>Rp 800.000</td>
                                            </tr>
                                            <tr class="order-shipping">
                                                <td>Pengiriman</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio1" name="shipping" checked>
                                                        <label for="radio1">Gratis Pengiriman</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio2" name="shipping">
                                                        <label for="radio2">Jne : Rp 9.000</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio3" name="shipping">
                                                        <label for="radio3">Jnt : Rp 11.000</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="order-tax">
                                                <td>Pajak</td>
                                                <td>Rp 2.000</td>
                                            </tr>
                                            <tr class="order-total">
                                                <td>Total</td>
                                                <td class="order-total-amount">Rp 802.000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="checkout" class="axil-btn btn-bg-primary checkout-btn">Proses Ke Pesanan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Cart Area  -->

    </main>


    <!-- End Copyright Area  -->
    </footer>
    <!-- End Footer Area  -->

    <!-- Product Quick View Modal Start -->