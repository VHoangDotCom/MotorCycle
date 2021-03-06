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
    <link href="{{asset('niceadmin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

<main id="main" class="main">

    <div class="main-wrapper ">
        <section class="page-title bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">You can manage your order here</span>
                            <h1 class="text-capitalize mb-4 text-lg">Order Management</h1>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{route('/')}}" class="text-white">Home</a></li>
                                <li class="list-inline-item"><span class="text-white">/</span></li>
                                <li class="list-inline-item"><a href="#" class="text-white-50">Your Orders</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end breadcum -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">List Orders </h5>
                        @if($message = Session::get('success'))
                            <div class="alert alert-success">
                                {{$message}}
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title"></h5>

                            <!-- Table with stripped rows -->
                            <div>


                                    <table class="table datatable">
                                        <thead>
                                        <tr>
                                            <th scope="col">#ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Pay method</th>
                                            <th scope="col">Card Name</th>
                                            <th scope="col">Cancel</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        @foreach($checkouts as $checkout)
                                            <tr>
                                                <th  scope="row">{{++$i}}</th>
                                                <td>{{$checkout->name}}</td>
                                                <td>{{$checkout->email}}</td>
                                                <td>{{$checkout->phone}}</td>
                                                <td>{{$checkout->address}}</td>
                                                <td>{{$checkout->description}}</td>
                                                <td>
                                                    <form action="{{route('orders.update',$checkout->id)}}" method="post">
                                                        @csrf
                                                        @method('PUT')

                                                        <select name="status" onchange='this.form.submit()' id="">
                                                            <option value="0"  disabled>Chờ xác nhận </option>
                                                            <option value="1" >Đang giao hàng</option>
                                                            <option value="2" >Hoàn thành</option>
                                                            <option value="3" >Đã Hủy</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td>${{number_format($checkout->total)}}</td>
                                                <td>Pay by card</td>
                                                <td>{{($checkout->card_name)}}</td>
                                                <td>
                                                    <form action="{{route('orders.destroy',$checkout->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button style="border: none" type="submit"><i class="bi bi-cart-x"></i></button>
                                                    </form>

                                                </td>
                                            </tr>
                                            @endforeach
                                            </tr>

                                            </tr>
                                        </tbody>
                                    </table>

                                    {!! $checkouts->links() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</main>


    <script src="{{asset('niceadmin/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('niceadmin/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('niceadmin/assets/vendor/quill/quill.min.js')}}"></script>
    <script src="{{asset('niceadmin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('niceadmin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('niceadmin/assets/vendor/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('niceadmin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('niceadmin/assets/vendor/echarts/echarts.min.js')}}"></script>
    @endsection
