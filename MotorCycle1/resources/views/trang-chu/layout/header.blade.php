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

                                <li><a href="{{route('products')}}">Men</a>
                                    <ul class="mega-menu mega-menu-2">
                                        <li><a href="#">Clothes</a>
                                            <ul class="sub-menu-2">
                                                <li><a href="#">Leather jacket</a></li>
                                                <li><a href="#">Underwear</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Women</a>
                                    <ul class="mega-menu mega-menu-2">
                                        <li><a href="#">Clothes</a>
                                            <ul class="sub-menu-2">
                                                <li><a href="#">Bra</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Accessory</a>
                                    <ul class="mega-menu mega-menu-2">
                                        <li><a href="#">Bib</a>
                                            <ul class="sub-menu-2">
                                                <li><a href="#">khăn ống</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Helmet</a>
                                            <ul class="sub-menu-2">
                                                <li><a href="#">mũ bảo hiểm</a></li>
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

                                         @if (Route::has('login'))
                                            <ul>
                                                @auth
                                                    <li> <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>

                                                    <li>
                                                        <form method="POST" action="{{ route('logout') }}">
                                                            @csrf

                                                            <link :href="route('logout')"
                                                                             onclick="event.preventDefault();
                                                                 this.closest('form').submit();">
                                                                {{ __('Log Out') }}
                                                            </link>
                                                        </form>
                                                    </li>
                                                @else
                                                    <li><a href="{{ route('login') }}" >Đăng Nhập</a></li>

                                                    @if (Route::has('register'))
                                                        <li><a href="{{ route('register') }}" >Đăng Ký</a></li>
                                                    @endif
                                                    <li><a href="{{ route('login') }}" >Đăng Nhập Quyền Admin</a></li>
                                                @endauth
                                            </ul>
                                        @endif



                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!-- End Header -->
