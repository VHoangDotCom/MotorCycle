@extends('trang-chu.layout.index')
@section('cart')

    <li><a href="{{route('Cart')}}"><i class="icon ion-bag"></i></a>

        <span class=""> {!!$dem!!}</span>
        @foreach($carts as $id=>$cart)

            <div class="mini-cart-sub">
                <div class="cart-product">
                    <div class="single-cart">
                        <div class="cart-img">
                            <a href="#"><img src="/image/{{$cart['image']}}"/></a>
                        </div>
                        <div class="cart-info">
                            <h5><a href="#">{{$cart['name']}}</a></h5>
                            <p>{{$cart['quantity']}} x {{$cart['price']}}</p>
                        </div>
                    </div>
                </div>
                <div class="cart-totals">
                    <h5>Tổng <span></span></h5>
                </div>
                <div class="cart-bottom">
                    <a href="{{route('checkout')}}">Check out</a>
                </div>
            </div>
        @endforeach
    </li>

@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/blog.css')}}">
    <div class="main-wrapper ">

        <section class="page-title bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Thank you for choosing our Products</span>
                            <h1  class="text-capitalize mb-4 text-lg"> Motorcycle Checkout</h1>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{route('/')}}" class="text-white">Home</a></li>
                                <li class="list-inline-item"><span class="text-white">/</span></li>
                                <li class="list-inline-item"><a href="#" class="text-white-50">Order Success</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <div class="shop-main-area mt-1 mb-5">
        <div class="container mb-5">
            <div class="row">
                <div class="col-12">
                    <h1>You have ordered successfully!</h1>
                    <p>Your order is being processed. You will receive your order soon !</p>
                    <p>Thank you for shopping at our store!</p>
                    <div class="buttons">
                        <div class="pull-right">
                            <a href="/" class="btn btn-primary btn-continue">Continue shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
