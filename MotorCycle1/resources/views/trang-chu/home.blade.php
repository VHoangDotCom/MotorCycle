@extends('trang-chu.layout.index')
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
                            <h5 class="wow fadeInLeft" data-wow-delay=".3s">áo da</h5>
                            <h5 class="wow fadeInLeft" data-wow-delay=".5s">bộ sưu tập mới</h5>
                            <h2 class="wow fadeInRight" data-wow-delay=".7s">sản phẩm độc đáo! </h2>
                            <h1 class="wow fadeInRight" data-wow-delay=".9s">backpack</h1>
                            <p class="wow fadeInLeft" data-wow-delay="1.3s">Thiết kế theo xu hướng xe cộ <br /> phong cách của bạn. </p>
                            <a href="/" class=" wow bounceInRight show-more" data-wow-delay="1.5s">xem thêm</a>
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
                        <h3>chùng tôi là ai</h3>
                        <h1>chào mừng bạn đến với Chopper</h1>
                        <img src="{{URL::asset('niceadmin/trang-chu/images/banner/1.png')}}" alt="banner" />
                        <p>Chopper theo đuổi triết lí kinh doanh nhân văn: Được <em><strong>là người tử tế, lương
                                    thiện</strong></em> và được
                            phục vụ <em><strong>những vị khách hàng tử tế, lương thiện</strong></em>.</p>
                        <h4>Miss Tùng - <span>CEO Chopper</span></h4>
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
                        <h2>Sản phẩm bán chạy</h2>
                    </div>
                </div>
                <div class="col-12">
                    <!-- tab-menu start -->
                    <div class="tab-menu mb-50 text-center">
                        <ul>
                            <li class="active"><a href="#" data-toggle="tab">quần áo</a></li>
                            <li><a href="#" data-toggle="tab">Mũ Bảo hiểm</a></li>
                            <li><a href="#" data-toggle="tab">giày</a></li>
                            <li><a href="#" data-toggle="tab">phụ kiện</a></li>
                        </ul>
                    </div>
                    <!-- tab-menu end -->
                </div>
            </div>
            <!-- tab-area start -->
            <div class="tab-content">
                <div class="tab-pane active" id="Clothing">
                    <div class="row">
                        <div class="product-active">
                            <div class="col-12">
                                <!-- product-wrapper start -->
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/14965516_1304858206222506_6574316790383360_n.jpg')}}" alt="product" class="primary" />
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/14965516_1304858206222506_6574316790383360_n.jpg')}}" alt="product" class="secondary" />
                                        </a>
                                        <span class="sale">sale</span>
                                        <div class="product-icon">
                                            <a href="#" data-toggle="tooltip" title="Thêm vào Giỏ Hàng"><i
                                                    class="icon ion-bag"></i></a>
                                            <a href="#" data-toggle="tooltip" title="So Sánh Sản Phẩm"><i
                                                    class="icon ion-android-options"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#mymodal"
                                               title="Xem Nhanh"><i class="icon ion-android-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content pt-20">
                                        <div class="manufacture-product">
                                            <a href="">Armani</a>
                                            <div class="rating">
                                                <div class="rating-box">
                                                    <div class="rating1">rating</div>
                                                </div>

                                            </div>
                                        </div>
                                        <h2><a href="#">Áo da nam</a></h2>
                                        <div class="price">
                                            <ul>
                                                <!-- cho nay la strike + del -->
                                                <li class="oldprice"><del>625,000đ</del></li>
                                                <li class="new-price">499,000đ</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-wrapper end -->
                            </div>
                            <div class="col-12">
                                <!-- product-wrapper start -->
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/14965516_1304858206222506_6574316790383360_n.jpg')}}" alt="product" class="primary" />
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/14965516_1304858206222506_6574316790383360_n.jpg')}}" alt="product" class="secondary" />
                                        </a>
                                        <div class="product-icon">
                                            <a href="#" data-toggle="tooltip" title="Thêm vào Giỏ Hàng"><i
                                                    class="icon ion-bag"></i></a>
                                            <a href="#" data-toggle="tooltip" title="So Sánh Sản Phẩm"><i
                                                    class="icon ion-android-options"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#mymodal"
                                               title="Xem Nhanh"><i class="icon ion-android-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content pt-20">
                                        <div class="manufacture-product">
                                            <a href="shop.html">Prada</a>
                                            <div class="rating">
                                                <div class="rating-box">
                                                    <div class="rating2">rating</div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2><a href="#">Giày da nam</a></h2>
                                        <div class="price">
                                            <ul>
                                                <li class="new-price">499,000đ</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-wrapper end -->
                            </div>
                            <div class="col-12">
                                <!-- product-wrapper start -->
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/250849721_4290564467709131_7273106139172555595_n.jpg')}}" alt="product" class="primary" />
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/250849721_4290564467709131_7273106139172555595_n.jpg')}}" alt="product" class="secondary" />
                                        </a>
                                        <span class="sale">sale</span>
                                        <div class="product-icon">
                                            <a href="#" data-toggle="tooltip" title="Thêm vào Giỏ Hàng"><i
                                                    class="icon ion-bag"></i></a>
                                            <a href="#" data-toggle="tooltip" title="So Sánh Sản Phẩm"><i
                                                    class="icon ion-android-options"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#mymodal"
                                               title="Xem Nhanh"><i class="icon ion-android-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content pt-20">
                                        <div class="manufacture-product">
                                            <a href="shop.html">H&M </a>
                                            <div class="rating">
                                                <div class="rating-box">
                                                    <div class="rating3">rating</div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2><a href="#">Mũ bảo hiểm</a></h2>
                                        <div class="price">
                                            <ul>
                                                <li class="old-price"><del>300,000đ</del></li>
                                                <li class="new-price">179,000đ</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-wrapper end -->
                            </div>
                            <div class="col-12">
                                <!-- product-wrapper start -->
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/250849721_4290564467709131_7273106139172555595_n.jpg')}}" alt="product" class="primary" />
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/250849721_4290564467709131_7273106139172555595_n.jpg')}}" alt="product" class="secondary" />
                                        </a>
                                        <div class="product-icon">
                                            <a href="#" data-toggle="tooltip" title="Thêm vào Giỏ Hàng"><i
                                                    class="icon ion-bag"></i></a>
                                            <a href="#" data-toggle="tooltip" title="So Sánh Sản Phẩm"><i
                                                    class="icon ion-android-options"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#mymodal"
                                               title="Xem Nhanh"><i class="icon ion-android-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content pt-20">
                                        <div class="manufacture-product">
                                            <a href="shop.html">Chanel</a>
                                            <div class="rating">
                                                <div class="rating-box">
                                                    <div class="rating4">rating</div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2><a href="#">áo da nam</a></h2>
                                        <div class="price">
                                            <ul>
                                                <li class="new-price">449,000đ</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-wrapper end -->
                            </div>
                            <div class="col-12">
                                <!-- product-wrapper start -->
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/250849721_4290564467709131_7273106139172555595_n.jpg')}}" alt="product" class="primary" />
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/250849721_4290564467709131_7273106139172555595_n.jpg')}}" alt="product" class="secondary" />
                                        </a>
                                        <div class="product-icon">
                                            <a href="#" data-toggle="tooltip" title="Thêm vào Giỏ Hàng"><i
                                                    class="icon ion-bag"></i></a>
                                            <a href="#" data-toggle="tooltip" title="So Sánh Sản Phẩm"><i
                                                    class="icon ion-android-options"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#mymodal"
                                               title="Xem Nhanh"><i class="icon ion-android-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content pt-20">
                                        <div class="manufacture-product">
                                            <a href="shop.html">Canifa</a>
                                            <div class="rating">
                                                <div class="rating-box">
                                                    <div class="rating5">rating</div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2><a href="#">Áo Nữ In Hình</a></h2>
                                        <div class="price">
                                            <ul>
                                                <li class="new-price">349,000đ</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-wrapper end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Handbags">
                    <div class="row">
                        <div class="product-active">
                            <div class="col-12">
                                <!-- product-wrapper start -->
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/250849721_4290564467709131_7273106139172555595_n.jpg')}}" alt="product" class="primary" />
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/250849721_4290564467709131_7273106139172555595_n.jpg')}}" alt="product" class="secondary" />
                                        </a>
                                        <span class="sale">sale</span>
                                        <div class="product-icon">
                                            <a href="#" data-toggle="tooltip" title="Thêm vào Giỏ Hàng"><i
                                                    class="icon ion-bag"></i></a>
                                            <a href="#" data-toggle="tooltip" title="So Sánh Sản Phẩm"><i
                                                    class="icon ion-android-options"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#mymodal"
                                               title="Xem Nhanh"><i class="icon ion-android-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content pt-20">
                                        <div class="manufacture-product">
                                            <a href="shop.html">Chanel</a>
                                            <div class="rating">
                                                <div class="rating-box">
                                                    <div class="rating1">rating</div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2><a href="#">Quần Dài Nam</a></h2>
                                        <div class="price">
                                            <ul>
                                                <li class="old-price"><del>600,000đ</del></li>
                                                <li class="new-price">449,000đ</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-wrapper end -->
                            </div>
                            <div class="col-12">
                                <!-- product-wrapper start -->
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/250849721_4290564467709131_7273106139172555595_n.jpg')}}" alt="product" class="primary" />
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/250849721_4290564467709131_7273106139172555595_n.jpg')}}" alt="product" class="secondary" />
                                        </a>
                                        <div class="product-icon">
                                            <a href="#" data-toggle="tooltip" title="Thêm vào Giỏ Hàng"><i
                                                    class="icon ion-bag"></i></a>
                                            <a href="#" data-toggle="tooltip" title="So Sánh Sản Phẩm"><i
                                                    class="icon ion-android-options"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#mymodal"
                                               title="Xem Nhanh"><i class="icon ion-android-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content pt-20">
                                        <div class="manufacture-product">
                                            <a href="shop.html">IVY Moda</a>
                                            <div class="rating">
                                                <div class="rating-box">
                                                    <div class="rating2">rating</div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2><a href="#">Áo lót nữ</a></h2>
                                        <div class="price">
                                            <ul>
                                                <li class="new-price">199,000đ</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-wrapper end -->
                            </div>
                            <div class="col-12">
                                <!-- product-wrapper start -->
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/250849721_4290564467709131_7273106139172555595_n.jpg')}}" alt="product" class="primary" />
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/250849721_4290564467709131_7273106139172555595_n.jpg')}}" alt="product" class="secondary" />
                                        </a>
                                        <span class="sale">sale</span>
                                        <div class="product-icon">
                                            <a href="#" data-toggle="tooltip" title="Thêm vào Giỏ Hàng"><i
                                                    class="icon ion-bag"></i></a>
                                            <a href="#" data-toggle="tooltip" title="So Sánh Sản Phẩm"><i
                                                    class="icon ion-android-options"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#mymodal"
                                               title="Xem Nhanh"><i class="icon ion-android-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content pt-20">
                                        <div class="manufacture-product">
                                            <a href="shop.html">Dior </a>
                                            <div class="rating">
                                                <div class="rating-box">
                                                    <div class="rating3">rating</div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2><a href="#">quần lót Nữ</a></h2>
                                        <div class="price">
                                            <ul>
                                                <li class="old-price"><del>400,000đ</del></li>
                                                <li class="new-price">299,000đ</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-wrapper end -->
                            </div>
                            <div class="col-12">
                                <!-- product-wrapper start -->
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/250849721_4290564467709131_7273106139172555595_n.jpg')}}" alt="product" class="primary" />
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/250849721_4290564467709131_7273106139172555595_n.jpg')}}" alt="product" class="secondary" />
                                        </a>
                                        <div class="product-icon">
                                            <a href="#" data-toggle="tooltip" title="Thêm vào Giỏ Hàng"><i
                                                    class="icon ion-bag"></i></a>
                                            <a href="#" data-toggle="tooltip" title="So Sánh Sản Phẩm"><i
                                                    class="icon ion-android-options"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#mymodal"
                                               title="Xem Nhanh"><i class="icon ion-android-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content pt-20">
                                        <div class="manufacture-product">
                                            <a href="shop.html">Chanel</a>
                                            <div class="rating">
                                                <div class="rating-box">
                                                    <div class="rating4">rating</div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2><a href="#">Váy Len Nữ Dài Tay</a></h2>
                                        <div class="price">
                                            <ul>
                                                <li class="new-price">499,000đ</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-wrapper end -->
                            </div>
                            <div class="col-12">
                                <!-- product-wrapper start -->
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/250849721_4290564467709131_7273106139172555595_n.jpg')}}" alt="product" class="primary" />
                                            <img src="{{URL::asset('niceadmin/trang-chu/images/product/250849721_4290564467709131_7273106139172555595_n.jpg')}}" alt="product" class="secondary" />
                                        </a>
                                        <div class="product-icon">
                                            <a href="#" data-toggle="tooltip" title="Thêm vào Giỏ Hàng"><i
                                                    class="icon ion-bag"></i></a>
                                            <a href="#" data-toggle="tooltip" title="So Sánh Sản Phẩm"><i
                                                    class="icon ion-android-options"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#mymodal"
                                               title="Xem Nhanh"><i class="icon ion-android-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content pt-20">
                                        <div class="manufacture-product">
                                            <a href="shop.html">H&M </a>
                                            <div class="rating">
                                                <div class="rating-box">
                                                    <div class="rating5">rating</div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2><a href="#">quần lót nam</a>
                                        </h2>
                                        <div class="price">
                                            <ul>
                                                <li class="new-price">149,000đ</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-wrapper end -->
                            </div>
                        </div>
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
                        <h2>Sản phẩm mới nhất </h2>
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
                              <form action="{{ route("addToCart") }}" method="POST">
                                  @csrf
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="/image/{{$product->image}}" alt="product" class="primary" />
                                        <img src="/image/{{$product->image}}" alt="product" class="secondary" />
                                    </a>
                                    <div class="product-icon">
                                        
                                        @if (Auth::check())
                                          @if ($product->quantity > 0)
                                            <input type="hidden" name="pro_id" value="{{ $product->pro_id }}">
                                            <button type="submit" data-toggle="tooltip"  title="Thêm vào Giỏ Hàng" class="btn btn-add-to-cart"><i
                                                class="icon ion-bag"></i></button>
                                           
                                          @endif
                                     
                                         @endif
                                        {{-- <a href="#" data-toggle="tooltip"  title="Thêm vào Giỏ Hàng"><i
                                                class="icon ion-bag"></i></a> --}}
                                        <a href="#" data-toggle="tooltip" title="So Sánh Sản Phẩm"><i
                                                class="icon ion-android-options"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#mymodal" title="Xem Nhanh"><i
                                                class="icon ion-android-open"></i></a>
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
                                    <h2><a href="product-details.html">{{$product->productName}}</a>
                                    </h2>
                                    <div class="price">
                                        <ul>
                                            <li class="new-price">{{$product->pro_new_price}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                          </form>
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
                        <h2>Bài Viết Mới Nhất</h2>
                    </div>
                </div>
                <div class="blog-active">

                    @foreach($blogs as $blog)
                        <div class="col-12">
                            <!-- single-blog start -->
                            <div class="single-blog">
                                <div class="blog-img">
                                    <a href="#"><img src="/image/{{$blog->image}}" alt="blog"></a>
                                    <div class="date">
                                        Aug <span>09</span>
                                    </div>
                                </div>
                                <div class="blog-content pt-20">
                                    <h3><a href="{{$blog->content}}">{{$blog->title}}</a>
                                    </h3>
                                    <span>By {{$blog->createdBy}}</span>
                                  {!!$blog->content!!}
                                    <a href="blog-details.html">Xem thêm...</a>
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
<script>
     function addToCart(event){
        event.preventDefault();
     let urlCart=$(this).data('url');
        $.ajax({
         type:"GET",
         url:urlCart,
         dataType:'json',
            success:function (data){
              if (data.code === 200){
                  alert('them san phan vao do hangf thanhf cong');
              }
         },
         error:function (){
         }
     })
    };
</script>