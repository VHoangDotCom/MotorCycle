@extends('layout.index')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Show Stock</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-bottom: 10px;margin-top: 10px">
            <a href="{{route('productOfPeople.index')}}" class="btn btn-primary">Back</a>
        </div>

    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Code</strong>
                {{$product->productCode}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name</strong>
                {{$product->Name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title</strong>
                {{$product->title}}
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                {{$product->description}}
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price</strong>
                {{$product->price}}
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Discount</strong>
                {{$product->discount}}
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity</strong>
                {{$product->quantity}}
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Warranty</strong>
                {{$product->warranty}}
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CreatedBy</strong>
                {{$product->createdBy}}
            </div>

        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Type</strong>
                {{'Accessories for people'}}
            </div>

        </div>
    </div> <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status</strong>
            {{$product->status}}
        </div>

    </div>



@endsection
