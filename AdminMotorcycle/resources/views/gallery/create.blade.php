@extends('layout.index')
@section('content')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Blogs</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Blogs</li>
                    <li class="breadcrumb-item active">Design Blogs</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
    @endif

    <!-- Create Blog -->
        <section class="section">


            <form action="{{route('gallery.store',$product->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Blog Details</h5>

                            <!-- General Form Elements -->
                            @foreach($products as $product)
                                <div class="col-6">
                                    <label for="inputState" class="form-label " >Product Name:</label>
                                    {{ $product->productName}}
                                </div>
                                <div class="col-6 " style="float: left">
                                    <label for="inputNumber" class="form-label">Image</label>
                                    {{$product->image}}
                                </div>

                            @endforeach

                            <div class="col-6 " style="float: left">
                                <label for="inputNumber" class="form-label">thumbnails</label>
                                <input name="image" multiple  class="form-control" type="file" id="formFile" >
                            </div>


                            <!-- End General Form Elements -->
                        </div>
                    </div>






                    <div class="row mb-3" >
                        <div class="col-sm-10">
                            <button  type="submit" class="btn btn-primary">Submit your blog</button>
                        </div>
                    </div>
                </div>
            </form>

        </section>
    </main>

@endsection
