@extends('layout.index')
@section('content')


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Product</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Product for People</li>
                    <li class="breadcrumb-item active">List Products</li>
                </ol>
            </nav>

        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        @if($message = Session::get('success'))
                            <div class="alert alert-success">
                                {{$message}}
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">Product for People</h5>
                            <div class="col-lg-12 text-center" style="margin-top: 10px;margin-bottom: 10px;float: right" >
                                <a href="{{route('productOfPeople.create')}}"  class="btn btn-success"><i class="bi bi-plus">  Add</i></a>
                            </div>

                            <!-- Table with stripped rows -->
                            <div>

                                @if(sizeof($products) > 0)
                                    <table class="table datatable">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Price(VND)</th>
                                            <th scope="col">Discount(%)</th>
                                            <th scope="col">Warranty</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">View</th>
                                            <th scope="col">Update</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        @foreach($products as $product)
                                            <tr>
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td><img src="/image/{{$product->image}}" title="Click image to download" style="width: 150px" class="img-fluid rounded-start" alt="..." ></td>
                                                <td>{{$product->productName}}</td>
                                                <td>{{$product->quantity}}</td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->discount}}</td>
                                                <td>{{$product->warranty}}</td>
                                                <td>{{$product->status}}</td>

                                                <td>
                                                    <form action="{{route('productOfPeople.destroy',$product->id)}}" method="post">
                                                        <a href="{{route('productOfPeople.show',$product->id)}}" class="btn btn-info"><i class="bi bi-eye">View</i></a>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{route('productOfPeople.destroy',$product->id)}}" method="post">
                                                        <a href="{{route('productOfPeople.edit',$product->id)}}" class="btn btn-primary"><i class="bi bi-pen">Edit</i></a>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{route('productOfPeople.destroy',$product->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash">Delete</i> </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tr>

                                            </tr>
                                        </tbody>
                                    </table>
                            @endif
                            {!! $products->links() !!}
                            <!-- End Table with stripped rows -->
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->



@endsection
