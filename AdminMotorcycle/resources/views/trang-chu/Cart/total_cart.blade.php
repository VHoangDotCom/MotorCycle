@extends('trang-chu.layout.index')
@section('content')

    <div id="page-wrapper">
        <!-- header-area start -->

        <!-- breadcrumbs-area start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h2>Giỏ Hàng</h2>
                            <ul>
                                <li><a href="index.html">Trang chủ /</a></li>
                                <li class="active"><a href="#">Giỏ hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs-area end -->
        <!-- shop-main-area start -->
        <div class="shop-main-area">
            <!-- cart-main-area start -->
            <div class="cart-main-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th class="product-thumbnail">Ảnh</th>
                                            <th class="product-name">Sản phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-quantity">số lượng</th>
                                            <th class="product-subtotal">tổng</th>
                                            <th class="product-remove">xóa</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="./images/product/14965516_1304858206222506_6574316790383360_n.jpg" alt="man" /></a></td>
                                            <td class="product-name"><a href="#">Sịp nam</a></td>
                                            <td class="product-price"><span class="amount">499,000đ</span></td>
                                            <td class="product-quantity"><input type="number" value="1"></td>
                                            <td class="product-subtotal">499,000đ</td>
                                            <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="./images/product/250849721_4290564467709131_7273106139172555595_n.jpg"
                                                                                           alt="man" /></a></td>
                                            <td class="product-name"><a href="#">Quần lót nữ</a></td>
                                            <td class="product-price"><span class="amount">499,000đ</span></td>
                                            <td class="product-quantity"><input type="number" value="1"></td>
                                            <td class="product-subtotal">499,000đ</td>
                                            <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="buttons-cart mb-30 mt-3">
                                <ul>
                                    <li><a href="#">Cập nhật giỏ hàng</a></li>
                                    <li><a href="shop.html">tiếp tục mua sắm</a></li>
                                </ul>
                            </div>
                            <div class="coupon">
                                <h3>phiếu giảm giá</h3>
                                <p>Điền mã giảm giá của bạn.</p>
                                <form action="#">
                                    <input type="text" placeholder="Mã giảm giá">
                                    <a href="#">Áp dụng</a>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5">
                            <div class="cart_totals">
                                <h2>Tổng giỏ hàng</h2>
                                <table>
                                    <tbody>
                                    <tr class="cart-subtotal">
                                        <th>tiền hàng</th>
                                        <td>
                                            <span class="amount">998,000đ</span>
                                        </td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>vận chuyển</th>
                                        <td>
                                            <ul id="shipping_method">
                                                <li>
                                                    <input name="shipping" type="radio">
                                                    <label>
                                                        Giao nhanh:
                                                        <span class="amount">30,000đ</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input name="shipping" type="radio" checked>
                                                    <label> Giao hàng tiêu chuẩn:
                                                        <span class="amount">0đ</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>tổng</th>
                                        <td>
                                            <strong>
                                                <span class="amount">998,000đ</span>
                                            </strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <a href="checkout.html">Tiến Hành Thanh Toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart-main-area end -->
        </div>

@endsection
