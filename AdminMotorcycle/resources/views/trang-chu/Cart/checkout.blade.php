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
                            <h2>Thanh Toán</h2>
                            <ul>
                                <li><a href="index.html">Trang Chủ /</a></li>
                                <li><a href="cart.html">Giỏ Hàng /</a></li>
                                <li class="active"><a href="#">Thanh Toán</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs-area end -->
        <!-- shop-main-area start -->

        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('orders.store')}}"  method="post" enctype="multipart/form-data">
            @csrf
        <div class="shop-main-area">
            <!-- coupon-area start -->
            <div class="coupon-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-accordion">
                                <h3>Bạn đã là thành viên? <span id="showlogin">Ấn vào đây để đăng nhập</span></h3>
                                <div class="coupon-content" id="checkout-login">
                                    <div class="coupon-info">
                                        <form action="#">
                                            <p class="form-row-first">
                                                <label>Tên Đăng Nhập hoặc Email <span class="required">*</span></label>
                                                <input type="text" name="email" placeholder="Enter your email here">
                                            </p>
                                            <p class="form-row-last">
                                                <label>Mật Khẩu<span class="required">*</span></label>
                                                <input type="text" name="password" placeholder="Enter your password here" >
                                            </p>
                                            <p class="form-row">
                                                <input type="submit" value="Đăng Nhập">
                                                <label>
                                                    <input type="checkbox">
                                                    Nhớ Mật Khẩu
                                                </label>
                                            </p>
                                            <p class="lost-password">
                                                <a href="#">Quên Tài Khoản?</a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- coupon-area end -->
            <!-- checkout-area start -->
            <div class="check-out-area">
                <div class="container">
                    <form action="#">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="checkbox-form">
                                    <h3>Thông Tin nhận hàng</h3>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Họ <span class="required">*</span></label>
                                                <input type="text" name="first_name" placeholder="Enter your first name here">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Tên <span class="required">*</span></label>
                                                <input type="text" name="last_name" placeholder="Enter your last name here">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="checkout-form-list">
                                                <label>Địa Chỉ <span class="required">*</span></label>
                                                <input type="text"  name="address" placeholder="Số nhà - Phố">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Xã/ Phường <span class="required">*</span></label>
                                                <input type="text" name="ward" placeholder="Enter your ward here">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Quận/ Huyện <span class="required">*</span></label>
                                                <input type="text" name="district" placeholder="Enter your district here">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="checkout-form-list">
                                                <label>Tỉnh / Thành Phố <span class="required">*</span></label>
                                                <input type="text" name="city" placeholder="Enter your city here">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Điện Thoại <span class="required">*</span></label>
                                                <input type="text" name="phone" placeholder="Enter your phone here">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Địa Chỉ Email <span class="required">*</span></label>
                                                <input type="email" name="email" placeholder="Enter your  email here">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="checkout-form-list create-acc">
                                                <input type="checkbox" id="cbox">
                                                <label>Tạo Tài Khoản?</label>
                                            </div>
                                            <div class="checkout-form-list create-account" id="cbox_info"
                                                 style="display: none;">
                                                <p>Tạo một tài khoản bằng cách nhập thông tin dưới đây. Nếu bạn là khách
                                                    hàng cũ, vui lòng đăng nhập ở đầu trang.</p>
                                                <label>Tên Đăng Nhập hoặc Email <span class="required">*</span></label>
                                                <input type="text" name="new_email" placeholder="Enter your email here">
                                                <label>Mật Khẩu <span class="required">*</span></label>
                                                <input type="password" name="password" placeholder="Enter your password here">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="different-address">
                                        <div class="ship-different-title">
                                            <h3>
                                                <label>Nhận Hàng Tại Địa Chỉ Khác?</label>
                                                <input type="checkbox" id="ship-box">
                                            </h3>
                                        </div>
                                        <div class="row" id="ship-box-info" style="display: none;">
                                            <div class="col-12 col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Họ<span class="required">*</span></label>
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Tên<span class="required">*</span></label>
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkout-form-list">
                                                    <label>Địa Chỉ <span class="required">*</span></label>
                                                    <input type="text" placeholder="Số nhà - Phố">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Xã/ Phường <span class="required">*</span></label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Quận/ Huyện <span class="required">*</span></label>
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="checkout-form-list">
                                                    <label>Tỉnh/ Thành Phố <span class="required">*</span></label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Điện Thoại <span class="required">*</span></label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Địa Chỉ Email <span class="required">*</span></label>
                                                    <input type="email" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-notes">
                                            <div class="checkout-form-list">
                                                <label>Ghi chú </label>
                                                <textarea
                                                    placeholder="Ghi chú về đơn hàng của bạn, Ví dụ ghi chú đặc biệt để nhận hàng."
                                                    rows="10" cols="30" id="checkout-mess"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="your-order">
                                    <h3>Đơn hàng của bạn</h3>
                                    <div class="your-order-table table-responsive">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th class="product-name">Sản phẩm</th>
                                                <th class="product-total">Tổng</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    Sịp nam <strong class="product-quantity"> ×
                                                        1</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">499,000đ</span>
                                                </td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    Xi lít Nữ <strong class="product-quantity"> ×
                                                        1</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">499,000đ</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Tổng tiền hàng</th>
                                                <td><span class="amount">998,000đ</span></td>
                                            </tr>
                                            <tr class="shipping">
                                                <th>Vận Chuyển</th>
                                                <td>
                                                    <ul>
                                                        <li></li>
                                                        <label>Giao hàng tiêu chuẩn</label>
                                                        </li>
                                                        <li></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Tổng đơn hàng</th>
                                                <td><strong><span class="amount">998,000đ</span></strong>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="payment-method">
                                        <div class="payment-accordion">
                                            <div class="collapses-group">
                                                <div class="panel-group" id="accordion" role="tablist"
                                                     aria-multiselectable="true">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingOne">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion"
                                                                   href="#collapseOne" aria-expanded="true"
                                                                   aria-controls="collapseOne">
                                                                    Chuyển khoản trực tiếp
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseOne" class="panel-collapse collapse in"
                                                             role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">
                                                                <p>Chuyển khoản trực tiếp vào tài khoản ngân hàng của
                                                                    chúng tôi. Vui lòng ghi chú mã đơn hàng của bạn. Đơn
                                                                    hàng của bạn sẽ được vận chuyển khi chúng tôi nhận
                                                                    được tiền trong tài khoản</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingTwo">
                                                            <h4 class="panel-title">
                                                                <a class="collapsed" role="button"
                                                                   data-toggle="collapse" data-parent="#accordion"
                                                                   href="#collapseTwo" aria-expanded="false"
                                                                   aria-controls="collapseTwo">
                                                                    Thanh toán bằng ví điện tử
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseTwo" class="panel-collapse collapse"
                                                             role="tabpanel" aria-labelledby="headingTwo">
                                                            <div class="panel-body">
                                                                <p>Hỗ trợ thanh toán qua các ví điện tử: MoMo, Zalo Pay,
                                                                    Payoo, Vtc Pay, Viettel Pay</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingThree">
                                                            <h4 class="panel-title">
                                                                <a class="collapsed" role="button"
                                                                   data-toggle="collapse" data-parent="#accordion"
                                                                   href="#collapseThree" aria-expanded="false"
                                                                   aria-controls="collapseThree">
                                                                    Thanh toán bằng thẻ<img src="images/2.png"
                                                                                            alt="payment" />
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseThree" class="panel-collapse collapse"
                                                             role="tabpanel" aria-labelledby="headingThree">
                                                            <div class="panel-body">
                                                                <p>Thanh toán bằng thẻ ghi nợ nội địa, thẻ tín dụng hoặc
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input type="submit" value="Đặt Hàng" id="order">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- checkout-area end -->
        </div>
        <!-- shop-main-area end -->
        </form>
    </div>
    @endsection
