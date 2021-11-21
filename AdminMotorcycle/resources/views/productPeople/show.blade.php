@extends('layout.index')
@section('content')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Product</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Product for People</li>
                    <li class="breadcrumb-item active">Review</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Code : </strong>
                    {{$product->productCode}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Name : </strong>
                    {{$product->productName}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title : </strong>
                    {{$product->title}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description : </strong>
                    {{$product->description}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price(VND) :</strong>
                    {{$product->price}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Discount : </strong>
                    {{$product->discount}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantity : </strong>
                    {{$product->quantity}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Warranty : </strong>
                    {{$product->warranty}}
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>CreatedBy : </strong>
                    {{$product->createdBy}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Type : </strong>
                    {{'Product for People'}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status : </strong>
                    {{$product->status}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last updated : </strong>
                    {{$product->updated_at}}
                </div>
            </div>

        </div>

    </main>


@endsection
