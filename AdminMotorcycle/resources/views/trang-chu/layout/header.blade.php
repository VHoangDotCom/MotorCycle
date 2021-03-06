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
                                <li><a href="{{route('products')}}">Accessories</a>
                                    <ul class="mega-menu mega-menu-2">
                                        <li><a href="#">Clothes</a>
                                            <ul class="sub-menu-2">
                                                <li><a href="#">Leather jacket</a></li>
                                                <li><a href="#">Underwear</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">About Us</a>

                                </li>


                                <li><a href="{{route('trang-chu.blogs.blogs_list')}}">Blogs</a></li>
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
                                            <input type="text" placeholder="T??m Ki???m" />
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
                                        <label for="btn1">????</label>
                                        <label for="btn2">????</label>
                                        <label for="btn3">????</label>
                                        <label for="btn4">????</label>
                                        <label for="btn5">????</label>
                                    </div>
                                    <input type="submit" value="submit" class="bam">
                                    <div onclick="toggle()" id="close"> ??? </div>
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
                                                    <li><a href="{{ route('login') }}" >????ng Nh???p</a></li>

                                                    @if (Route::has('register'))
                                                        <li><a href="{{ route('register') }}" >????ng K??</a></li>
                                                    @endif
                                                    <li><a href="{{ route('login') }}" >????ng Nh???p Quy???n Admin</a></li>
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
