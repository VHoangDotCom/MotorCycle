@extends('layout.index')
@section('content')
    <main id="main" class="main">


        <section class="section">
            <div class="row">
                <div class="col-lg-12">




                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Product Category</h5>

                            @if($errors->any())
                                <div class="alert aler-danger">
                                    <strong>Oops!</strong>There were some problems with your input. <br><br>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>

                                </div>
                        @endif

                        <!-- Multi Columns Form -->
                            <form class="row g-3" action="{{route('category.update',$category->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Category Name:</label>
                                    <input type="text" class="form-control" id="inputName5" name="categoryCode" placeholder="Enter the category name" value="{{$category->categoryCode}}">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputEmail5" class="form-label">Title:</label>
                                    <input type="text" class="form-control" id="inputEmail5" name="title" placeholder="Enter the title" value="{{$category->title}}">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputPassword5" class="form-label">Content :</label>
                                    <input type="text" class="form-control" id="inputPassword5" name="content" placeholder="Enter the content" value="{{$category->content}}">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Status</label>
                                    <input type="text" class="form-control" id="inputAddres5s" placeholder="Enter the status" name="status" value="{{$category->status}}">
                                </div>

                                <div style="margin-top: 10px">
                                    <button type="submit" class="btn btn-primary " style="float: right">Submit</button>

                                    <a href="{{route('category.index')}}" class="btn btn-primary" style="float: left">Back</a>
                                </div>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->
@endsection