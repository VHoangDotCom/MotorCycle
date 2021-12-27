<header>
    <!-- header-top-area start -->
    <div class="header-top-area" id="sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-2 col-md-">
                    <!-- logo-area start -->
                    <div class="logo-area">
                        <a href="{{route('/')}}"><img src="{{URL::asset('niceadmin/trang-chu/images/logo/1.png')}}" alt="logo"></a>
                    </div>
                    <!-- logo-area end -->
                </div>
                <div class="col-md-6 d-none d-lg-block">

                    <!-- Menu Task Bar -->
                    <div class="menu-area">
                        <nav>
                            <ul>
                                <li class="active"><a href="{{route('/')}}">Home</a></li>
                                <li><a href="{{route('products')}}">Accessories</a>

                                    <ul class="mega-menu mega-menu-2">
                                        <li><a href="{{route('products')}}">Categories for man</a>
                                            <ul class="sub-menu-2">
                                                <li><a href="#">Helmet</a></li>
                                                <li> <a href="#">Glove</a></li>
                                                <li> <a href="#">Jacket</a></li>
                                                <li><a href="#">Jean</a></li>
                                                <li><a href="#">Boots</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="{{route('products')}}">Accessories for motorcycle</a>
                                            <ul class="sub-menu-2">
                                                <li><a href="#">Tire</a></li>
                                                <li><a href="#">Break</a></li>
                                                <li><a href="#">Signal</a></li>
                                                <li><a href="#">Toys</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </li>


                                <li><a href="{{ route('blog_list') }}">Blogs</a></li>
                                <li><a href="{{ route('about_us') }}">About us</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-2 col-md-4">
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
                            @yield('cart')


                            <li>
                                <a href="#" onclick="toggle()" class="bam"  id="button" ><i class="ionicons ion-android-favorite-outline"></i></a>
                            </li>
                            <div class="popup-container">
                                <div class="popup">
                                    <h3>how do you like our services</h3>
                                    <input type="radio" name="buttons" id="btn1">
                                    <input type="radio" name="buttons" id="btn2">
                                    <input type="radio" name="buttons" id="btn3">
                                    <input type="radio" name="buttons" id="btn4">
                                    <input type="radio" name="buttons" id="btn5">
                                    <div class="icons">
                                        <label for="btn1">🙁</label>
                                        <label for="btn2">😐</label>
                                        <label for="btn3">😊</label>
                                        <label for="btn4">😀</label>
                                        <label for="btn5">😍</label>
                                    </div>
                                    <input type="submit" value="submit" class="bam">
                                    <div onclick="toggle()" id="close"> ✖ </div>
                                </div>
                            </div>

                            <script>
                                function toggle(){
                                    let toggle = document.querySelector('.popup-container')
                                    toggle.classList.toggle('toggle');
                                }
                            </script>


                            <li><a href="#" id="show-cart"><i class="icon ion-android-person"></i></a>
                                <div class="shapping-area" id="hide-cart">
                                    <div class="single-shapping">
                                         @if (Route::has('login'))
                                            <ul>
                                                @auth
                                                    @can('admin')
                                                    <li> <a href="{{ route('home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
                                                    @endcan
                                                    <li>
                                                        <form method="POST" action="{{ route('logout') }}">
                                                            @csrf

                                                            <a href="route('logout')"
                                                                             onclick="event.preventDefault();
                                                                 this.closest('form').submit();">
                                                                {{ __('Log Out') }}
                                                            </a>
                                                        <li><a href="{{ route('order_user') }}" >Order Manage</a></li>
                                                        </form>
                                                    </li>
                                                @else
                                                    <li><a href="{{ route('login') }}" >Đăng Nhập</a></li>


                                                    @if (Route::has('register'))
                                                        <li><a href="{{ route('register') }}" >Đăng Ký</a></li>

                                                    @endif
                                                @endauth

                                            </ul>
                                        @endif


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
