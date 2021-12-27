@include('trang-chu.layout.pre_loader')
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

<div id="page-wrapper">

    <div class="slider-area">
        <div id="slider">
            <img src="{{URL::asset('niceadmin/trang-chu/images/slider/slider1.jpg')}}" alt="slider-img" title="#caption1" />
        </div>
        <div class="nivo-html-caption" id="caption1">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider-text">
                            <h5 class="wow fadeInLeft" data-wow-delay=".3s">Jacket</h5>
                            <h5 class="wow fadeInLeft" data-wow-delay=".5s">Our new collection</h5>
                            <h2 class="wow fadeInRight" data-wow-delay=".7s">Unique Products! </h2>
                            <h1 class="wow fadeInRight" data-wow-delay=".9s">backpack</h1>
                            <p class="wow fadeInLeft" data-wow-delay="1.3s">Design according to vehicle trends. <br/> Your style, Your choice ! </p>
                            <a href="/" class=" wow bounceInRight show-more" data-wow-delay="1.5s">Learn more</a>
                        </div>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div>
    </div>

    <!-- founder-area start -->
    <div class="founder-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="founder-description text-center">
                        <h3 class="wow fadeInDown" data-wow-delay=".9s">who we are ?</h3>
                        <h1 class="wow fadeInDown" data-wow-delay="1.1s">Welcome to Chopper Store</h1>
                        <img src="{{URL::asset('niceadmin/trang-chu/images/banner/1.png')}}" alt="banner" />
                        <p>Chopper pursues humanistic business philosophy: Be <em><strong>be a kind, honest person</strong></em>
                           and could serve <em><strong>kind, honest customers</strong></em>.</p>
                        <h4 class="wow fadeInUp" data-wow-delay="1.1s">Miss Tùng - <span>CEO Chopper</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- founder-area end -->
    <!-- feature-product-area start -->
    <div class="feature-product-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-30 text-center">
                        <h2>Best-seller products</h2>
                    </div>
                </div>
                <div class="col-12">
                    <!-- tab-menu start -->
                    <div class="tab-menu mb-50 text-center">
                        <ul>
                            <li class="active"><a href="#" data-toggle="tab">Clothes</a></li>
                            <li><a href="#" data-toggle="tab">Helmets</a></li>
                            <li><a href="#" data-toggle="tab">Boots</a></li>
                            <li><a href="#" data-toggle="tab">Accessories</a></li>
                        </ul>
                    </div>
                    <!-- tab-menu end -->
                </div>
            </div>
            <!-- tab-area start -->
            <div class="tab-content">
                <div class="row">
                    <div class="product-active">


                        @foreach($products as $product)
                            <div class="col-12">
                                <!-- product-wrapper start -->
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="{{route('detail',$product->pro_id)}}">
                                            <img src="/image/{{$product->image}}" alt="product" class="primary" />
                                            <img src="/image/{{$product->image}}" alt="product" class="secondary" />
                                        </a>
                                        <div class="product-icon">

                                            <a href="{{ route('add.to.cart', $product->pro_id)}}" data-target="#mymodal"  id="addToCart"  title="Add to cart"><i
                                                    class="icon ion-bag addToCart"></i></a>
                                            <a href="#" data-target="#mymodal" title="Compare Product"><i
                                                    class="icon ion-android-options"></i></a>
                                            <a href="{{route('detail',$product->pro_id)}}"  data-target="#mymodal" title="View detail"><i
                                                    class="icon ion-ios-eye"></i></a>
                                        </div>
                                    </div>

                                    <div class="product-content pt-20">
                                        <div class="manufacture-product">

                                            <div class="rating">
                                                <div class="rating-box">
                                                    <div class="rating2">rating</div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2><a href="{{route('detail',$product->pro_id)}}">{{$product->productName}}</a>
                                        </h2>
                                        <div class="price">
                                            <ul>
                                                <li class="new-price">${{number_format($product->pro_new_price)}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-wrapper end -->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- tab-area end -->
        </div>
    </div>

    <!-- arrivals-area start -->
    <div class="arrivals-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-30 text-center">
                        <h2>Latest Products </h2>
                    </div>
                </div>
            </div>

            <!-- tab-area start -->
            <div class="tab-content">
                <div class="row">
                    <div class="product-active">


                       @foreach($products as $product)
                          <div class="col-12">
                            <!-- product-wrapper start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="{{route('detail',$product->pro_id)}}">
                                        <img src="/image/{{$product->image}}" alt="product" class="primary" />
                                        <img src="/image/{{$product->image}}" alt="product" class="secondary" />
                                    </a>
                                    <div class="product-icon">

                                        <a href="{{ route('add.to.cart', $product->pro_id)}}" data-toggle="tooltip"  id="addToCart"  title="Add to cart"><i
                                                class="icon ion-bag addToCart"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Compare product"><i
                                                class="icon ion-android-options"></i></a>
                                        <a href="{{route('detail',$product->pro_id)}}"  data-target="#mymodal" title="View detail"><i
                                                class="icon ion-ios-eye"></i></a>
                                    </div>
                                </div>

                                <div class="product-content pt-20">
                                    <div class="manufacture-product">

                                        <div class="rating">
                                            <div class="rating-box">
                                                <div class="rating2">rating</div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2><a href="{{route('detail',$product->pro_id)}}">{{$product->productName}}</a>
                                    </h2>
                                    <div class="price">
                                        <ul>
                                            <li class="new-price">${{number_format($product->pro_new_price)}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- product-wrapper end -->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- tab-area end -->
        </div>
    </div>
    <!-- arrivals-area end -->
    <!-- blog-area start -->
    <div class="blog-aea ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-30 text-center">
                        <h2>Latest Blogs</h2>
                    </div>
                </div>
                <div class="blog-active">

                    @if($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{$message}}
                        </div>
                    @endif
                    @foreach($blogs as $blog)
                        <div class="col-12">
                            <!-- single-blog start -->
                            <div class="single-blog">
                                <div class="blog-img">
                                    <a href="{{route('blog_detail',$blog->id)}}"><img src="/image/{{$blog->image}}" alt="blog"></a>
                                    <div class="date">
                                        {{$blog->updated_at->format('M')}}-{{$blog->updated_at->format('Y')}} <span>{{$blog->updated_at->format('d')}}</span>
                                    </div>
                                </div>
                                <div class="blog-content pt-20">
                                    <h3><a href="{{route('blog_detail',$blog->id)}}">{{$blog->title}}</a>
                                    </h3>
                                    <span>By {{$blog->createdBy}}</span>
                                    <a href="{{route('blog_detail',$blog->id)}}">Watch more...</a>
                               </div>
                            </div>
                            <!-- single-blog end -->
                        </div>
                   @endforeach

                </div>

            </div>
        </div>
    </div>

    <!-- blog-area end -->

</div>

@endsection



