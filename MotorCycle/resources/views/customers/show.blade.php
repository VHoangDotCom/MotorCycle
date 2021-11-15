@extends('layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Customers</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>

        </div><!-- End Page Title -->

        <div class="row"style="float: left">
            <div class="col-lg-12" >
                <h2 class="text-center">Show Customer</h2>
            </div>


        </div>
<div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>UserName:</strong>
                {{$customer->username}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                {{$customer->password}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FirstName:</strong>
                {{$customer->firstName}}
            </div>
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Lastname:</strong>
            {{$customer->lastname}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Address:</strong>
            {{$customer->address}}
        </div>
    </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{$customer->email}}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Phone:</strong>
            {{$customer->phone}}
        </div>
    </div>
       <div class="row " style="float:left;">
           <div class="col-lg-12 text-center" style="margin-bottom: 10px;margin-top: 10px;float: right">
               <a href="{{route('customers.index')}}" class="btn btn-primary">Back</a>
           </div>
       </div>

</div>
@endsection

