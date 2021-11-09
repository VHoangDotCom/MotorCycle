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
                            <form class="row g-3" action="{{route('category.store')}}" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Category Name:</label>
                                    <input type="text" class="form-control" id="inputName5" name="categoryCode" placeholder="Enter the category name">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputEmail5" class="form-label">Title:</label>
                                    <input type="text" class="form-control" id="inputEmail5" name="title" placeholder="Enter the title">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputPassword5" class="form-label">Content :</label>
                                    <input type="text" class="form-control" id="inputPassword5" name="content" placeholder="Enter the content">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Status</label>
                                    <input type="text" class="form-control" id="inputAddres5s" placeholder="Enter the status" name="status">
                                </div>

                                <div class="text-center" style="margin-top: 10px">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <a href="{{route('category.index')}}" class="btn btn-primary">Back</a>
                                </div>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->
@endsection
