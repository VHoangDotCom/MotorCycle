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
                            <div class="dataTable-top" style="float: right" >
                                <a href="{{route('productPeople.create')}}"  class="btn btn-success"><i class="bi bi-plus">  Add</i></a>
                            </div>

                            <div>

                                @if(sizeof($products) > 0)
                                    <table class="table datatable">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">New Price(VND)</th>
                                            <th scope="col">Old Price(VND)</th>

                                            <th scope="col">Status</th>

                                            <th scope="col" >Review</th>
                                            <th scope="col" >Update</th>
                                            <th scope="col" >Delete</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        @foreach($products as $product)
                                            <tr>
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td><img src="/image/{{$product->image}}" title="{{$product->productName}}" style="width: 150px" class="img-fluid rounded-start" alt="..." ></td>
                                                <td>{{$product->productName}}</td>
                                                <td>{{$product->quantity}}</td>
                                                <td>{{$product->pro_new_price}}</td>
                                                <td>{{$product->pro_old_price}}</td>
                                                <td>{{$product->status}}</td>


                                                <td>
                                                    <form action="{{route('productPeople.destroy',$product->pro_id)}}" method="post">
                                                        <a href="{{route('productPeople.show',$product->pro_id)}}" class="btn btn-primary"><i class="bi bi-eye"> Show</i> </a>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{route('productPeople.destroy',$product->pro_id)}}" method="post">
                                                        <a href="{{route('productPeople.edit',$product->pro_id)}}" class="btn btn-primary"><i class="bi bi-file-earmark-font"> Edit</i> </a>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{route('productPeople.destroy',$product->pro_id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"> Delete</i>  </button>
                                                    </form>
                                                </td>
{{--                                                <td>--}}

{{--                                                        <a href="{{route('gallery.create',$product->id)}}" class="btn btn-info"><i class="bi bi-eye">Create Thumbnails</i></a>--}}

{{--                                                </td>--}}


                                            </tr>
                                            </tr>
                                            @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                            @endif
                            {!! $products->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
