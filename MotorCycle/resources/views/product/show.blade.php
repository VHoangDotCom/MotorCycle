@extends('layout.index')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Show Stock</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-bottom: 10px;margin-top: 10px">
            <a href="{{route('stocks.index')}}" class="btn btn-primary">Back</a>
        </div>

    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name</strong>
                {{$stock->pro_name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Description</strong>
                {{$stock->pro_desc}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Qty</strong>
                {{$stock->qty}}
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image</strong>
                {{$stock->image}}
            </div>

        </div>


@endsection
