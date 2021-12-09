@extends('trang-chu.layout.index')
@section('content')
<head>
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/blog.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

    <div class="heading">
        <h1>our blogs</h1>
        <p> <a href="home.html">home >></a> blogs </p>
    </div>

    <section class="blogs">

        <h1 class="title"> our <span>blogs</span> <a href="#">view all >></a> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="image/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>blogs title goes here</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, dolor!</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>blogs title goes here</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, dolor!</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>blogs title goes here</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, dolor!</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>blogs title goes here</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, dolor!</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>blogs title goes here</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, dolor!</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/blog-6.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>blogs title goes here</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, dolor!</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </section>


@endsection
