@extends('trang-chu.layout.index')
@section('content')

    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/blog.css')}}">

    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/plugins/bootstrap/plugins/themify/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/plugins/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/plugins/magnific-popup/dist/magnific-popup.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/plugins/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/plugins/slick-carousel/slick/slick-theme.css')}}">
    <div class="main-wrapper ">
        <section class="page-title bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Our blogs</span>
                            <h1 class="text-capitalize mb-4 text-lg">Blog articles</h1>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{route('/')}}" class="text-white">Home</a></li>
                                <li class="list-inline-item"><span class="text-white">/</span></li>
                                <li class="list-inline-item"><a href="#" class="text-white-50">Our blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section blog-wrap bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">

                            @if($message = Session::get('success'))
                                <div class="alert alert-success">
                                    {{$message}}
                                </div>
                            @endif

                            @foreach($blogs as $blog)
                                <div class="col-lg-6 col-md-6 mb-5">
                                    <div class="blog-item">
                                        <img src="/image/{{$blog->image}}" alt="" class="img-fluid rounded">

                                        <div class="blog-item-content bg-white p-4">
                                            <div class="blog-item-meta  py-1 px-2">
                                                <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>{{$blog->createdBy}}</span>
                                            </div>

                                                <h3 class="mt-3 mb-3"><a href="{{route('blog_detail',$blog->blog_id)}}">{{$blog->title}}</a></h3>
                                                <p class="mb-4">{{$blog->description}}</p>
                                                <a href="{{route('blog_detail',$blog->id)}}" class="btn btn-small btn-main btn-round-full">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-lg-6 col-md-6 mb-5">
                                <div class="blog-item">
                                    <img src="{{URL::asset('niceadmin/trang-chu/images/blog/4.jpg')}}" alt="" class="img-fluid rounded">

                                    <div class="blog-item-content bg-white p-4">
                                        <div class="blog-item-meta py-1 px-2">
                                            <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Marketing</span>
                                        </div>

                                        <h3 class="mt-3 mb-3"><a href="blog-single.html">Marketing Strategy to bring more affect</a></h3>
                                        <p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!</p>

                                        <a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Learn More</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar-wrap">
                            <div class="sidebar-widget search card p-4 mb-3 border-0">
                                <input type="text" class="form-control" placeholder="search">
                                <a href="#" class="btn btn-mian btn-small d-block mt-2">search</a>
                            </div>

                            <div class="sidebar-widget card border-0 mb-3">
                                <img src="{{URL::asset('niceadmin/trang-chu/images/blog/blog-author.jpg')}}" alt="" class="img-fluid">
                                <div class="card-body p-4 text-center">
                                    <h5 class="mb-0 mt-4">Anh Duc</h5>
                                    <p>Ong than Bootstrap</p>
                                    <p>Best Vaper in the world .</p>

                                    <ul class="list-inline author-socials">
                                        <li class="list-inline-item mr-3">
                                            <a href="#"><i class="fab fa-facebook-f text-muted"></i></a>
                                        </li>
                                        <li class="list-inline-item mr-3">
                                            <a href="#"><i class="fab fa-twitter text-muted"></i></a>
                                        </li>
                                        <li class="list-inline-item mr-3">
                                            <a href="#"><i class="fab fa-linkedin-in text-muted"></i></a>
                                        </li>
                                        <li class="list-inline-item mr-3">
                                            <a href="#"><i class="fab fa-pinterest text-muted"></i></a>
                                        </li>
                                        <li class="list-inline-item mr-3">
                                            <a href="#"><i class="fab fa-behance text-muted"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
                                <h5>Latest Posts</h5>

                                @if($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        {{$message}}
                                    </div>
                                @endif

                                @foreach($blogs as $blog)
                                    <div class="media border-bottom py-3">
                                        <a href="#"><img class="mr-4" src="/image/{{$blog->image}}" alt="blog"></a>
                                        <div class="media-body">
                                            <h6 class="my-2"><a href="#">{{$blog->title}}</a></h6>
                                            <span class="text-sm text-muted">{{$blog->updated_at->format('D')}} {{$blog->updated_at->format('M')}} {{$blog->updated_at->format('Y')}}</span>
                                        </div>
                                    </div>

                                @endforeach

                                <div class="media py-3">
                                    <a href="#"><img class="mr-4" src="{{URL::asset('niceadmin/trang-chu/images/blog/bt-3.jpg')}}" alt=""></a>
                                    <div class="media-body">
                                        <h6 class="my-2"><a href="#">Cach hut vape chuan men</a></h6>
                                        <span class="text-sm text-muted">03 Mar 2018 </span>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-widget bg-white rounded tags p-4 mb-3">
                                <h5 class="mb-4">Tags</h5>

                                <a href="#">Web</a>
                                <a href="#">MotorCycle</a>
                                <a href="#">Accessory</a>
                                <a href="#">Gloves</a>
                                <a href="#">Blogs</a>
                                <a href="#">Safe</a>
                                <a href="#">Social Media</a>
                                <a href="#">Branding</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-8">
                        <nav class="navigation pagination py-2 d-inline-block">
                            <div class="nav-links">
                                <a class="prev page-numbers" href="#">Prev</a>
                                <span aria-current="page" class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="next page-numbers" href="#">Next</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer Start -->

    </div>

@endsection
