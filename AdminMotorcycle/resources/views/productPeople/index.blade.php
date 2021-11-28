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
                                            <th scope="col">Price(VND)</th>
                                            <th scope="col">Discount(%)</th>

                                            <th scope="col">Status</th>
                                            <th scope="col" >More</th>
                                            <th scope="col" >Thumbnails</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        @foreach($products as $product)

                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td><img src="/image/{{$product->image}}" title="{{$product->productName}}" style="width: 150px" class="img-fluid rounded-start" alt="..." ></td>
                                                <td>{{$product->productName}}</td>
                                                <td>{{$product->quantity}}</td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->discount}}</td>

                                                <td>{{$product->status}}</td>


                                                <td style="width: 600px">
                                                    <form action="/productPeople/show/{{ $product->id }}" method="get">
                                                        <button type="submit" class="btn btn-info"><i class="bi bi-eye"></i></button>
                                                        <button type="submit"  class="btn btn-primary"><i class="bi bi-pen"></i></button>
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> </button>


                                                    </form>
                                                </td>
                                                <td>

                                                    <a href="{{route('gallery.create',$product->id)}}" class="btn btn-info"><i class="bi bi-plus"></i></a>

                                                </td>



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
