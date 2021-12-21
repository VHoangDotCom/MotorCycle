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
                                <li><a href="{{route("/")}}">Trang chủ /</a></li>
                                <li class="active"><a href="">Giỏ hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs-area end -->
        <!-- shop-main-area start -->
        <div class="shop-main-area mt-1 mb-5">
            <div class="container mb-5">
                <div class="row">
                    <div class="col-12">
                        <h1>BẠN ĐÃ ĐẶT HÀNG THÀNH CÔNG!</h1>
                        <p>Đơn hàng của bạn đã được xử lý thành công!</p>
                        <p>Cám ơn bạn đã mua sắm tại cửa hàng chúng tôi!</p>
                        <div class="buttons">
                            <div class="pull-right">
                                <a href="{{route('/')}}" class="btn btn-primary btn-continue">Tiếp Tục Mua Sắm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop-main-area end -->
    </div>
@endsection
