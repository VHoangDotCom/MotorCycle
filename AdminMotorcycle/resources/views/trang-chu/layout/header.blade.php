<header>
    <!-- header-top-area start -->
    <div class="header-top-area" id="sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-2">
                    <!-- logo-area start -->
                    <div class="logo-area">
                        <a href="{{route('trang-chu.home')}}"><img src="{{URL::asset('niceadmin/trang-chu/images/logo/1.png')}}" alt="logo"></a>
                    </div>
                    <!-- logo-area end -->
                </div>
                <div class="col-md-7 d-none d-lg-block">

                    <!-- Menu Task Bar -->
                    <div class="menu-area">
                        <nav>
                            <ul>
                                <li class="active"><a href="{{route('trang-chu.home')}}">Home</a></li>
                                <li><a href="#">Men</a>
                                    <ul class="mega-menu mega-menu-2">
                                        <li><a href="#">Quần áo</a>
                                            <ul class="sub-menu-2">
                                                <li><a href="#">áo da</a></li>
                                                <li><a href="#">quần lót</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">phụ kiện</a>
                                    <ul class="mega-menu mega-menu-2">
                                        <li><a href="#">khăn quàng</a>
                                            <ul class="sub-menu-2">
                                                <li><a href="#">khăn ống</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">mũ bảo hiểm</a>
                                            <ul class="sub-menu-2">
                                                <li><a href="#">mũ bảo hiểm</a></li>
                                            </ul>
                                        </li>![](C:/Users/Admin/AppData/Local/Temp/slider1.jpg)
                                    </ul>
                                </li>
                                <li><a href="#">Women</a>
                                    <ul class="mega-menu mega-menu-2">
                                        <li><a href="#">Quần áo</a>
                                            <ul class="sub-menu-2">
                                                <li><a href="#">áo lót</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('trang-chu.home')}}">Blogs</a></li>
                                <li><a href="{{route('trang-chu.home')}}">contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="header-right-area">
                        <ul>
                            <li><a id="show-search" href="#"><i class="icon ion-ios-search-strong"></i></a>
                                <div class="search-content" id="hide-search">
                                            <span class="close" id="close-search">
                                                <i class="ion-close"></i>
                                            </span>
                                    <div class="search-text">
                                        <h1>Search</h1>
                                        <form action="#">
                                            <input type="text" placeholder="Tìm Kiếm" />
                                            <button class="btn" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li><a href="cart.html"><i class="icon ion-bag"></i></a>
                                <span>1</span>
                                <div class="mini-cart-sub">
                                    <div class="cart-product">
                                        <div class="single-cart">
                                            <div class="cart-img">
                                                <a href="#"><img src="{{URL::asset('niceadmin/trang-chu/images/product/1.jpg')}}" alt="book"/></a>
                                            </div>
                                            <div class="cart-info">
                                                <h5><a href="#">Quần lót nữ</a></h5>
                                                <p>1 x 499,000đ</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-totals">
                                        <h5>Tổng <span>998,000đ</span></h5>
                                    </div>
                                    <div class="cart-bottom">
                                        <a href="checkout.html">Check out</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#" id="show-cart"><i class="icon ion-android-person"></i></a>
                                <div class="shapping-area" id="hide-cart">
                                    <div class="single-shapping">
                                        <span>Tài khoản</span>
                                        <ul>
                                            <li><a href="register.html">Đăng Ký</a></li>
                                            <li><a href="login.html">Đăng Nhập</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!-- End Header -->
