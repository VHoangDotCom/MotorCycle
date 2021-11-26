@extends('layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Product Management</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Product Management</li>
                    <li class="breadcrumb-item active">Create product for motors</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">


                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Product </h5>

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
                            <form class="row g-3" action="{{route('productOfItems.store')}}" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Product Code:</label>
                                    <input type="text" class="form-control" id="inputName5" name="productCode" placeholder="Enter the Product Code">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Product Name:</label>
                                    <input type="text" class="form-control" id="inputName5" name="productName" placeholder="Enter the Product name">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputEmail5" class="form-label">Title:</label>
                                    <input type="text" class="form-control" id="inputEmail5" name="title" placeholder="Enter the title">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Description:</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" placeholder="Enter description" class="form-control" id="inputEmail5" style="width: 950px"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Price(VND) :</label>
                                    <input type="number" class="form-control" id="inputAddres5s" placeholder="Enter the Price" name="price">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Discount(%) :</label>
                                    <input type="number" class="form-control" id="inputAddres5s" placeholder="Enter the Discount" name="discount">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Quantity</label>
                                    <input type="number" class="form-control" id="inputAddres5s" placeholder="Enter the Quantity" name="quantity">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Warranty</label>
                                    <input type="text" class="form-control" id="inputAddres5s" placeholder="Enter the Warranty" name="warranty">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Created By</label>
                                    <input type="text" class="form-control" id="inputAddres5s" placeholder="Enter the Created By" name="createdBy">
                                </div>
                                <div  class="col-12" >
                                    <label for="inputState" class="form-label " >Product Type:</label>
                                    <div class="form-check"  >

                                        <div >
                                            <input class="form-check-input" type="radio" name="productType"  id="gridRadios1" value="0" >
                                            <label class="form-check-label" for="gridRadios1">
                                                Accessories for people
                                            </label>
                                        </div>
                                        <div >
                                            <input class="form-check-input" type="radio"name="productType"  id="gridRadios1" value="1" >
                                            <label class="form-check-label" for="gridRadios1">
                                                Items for motors
                                            </label>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="inputState" class="form-label " >Category Name:</label>
                                    <select id="inputState" class="form-select" name="categoryID">
                                        <option value="0">Enter the product category</option>
                                        {!!$htmlOption !!} }
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="inputState" class="form-label " >Status:</label>
                                    <select id="inputState" class="form-select" name="status">
                                        <option value="0">Enter the Product Status:</option>
                                        <option value="still product">Still Product</option>
                                        <option value="out of product">Out Of Product</option>

                                    </select>
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