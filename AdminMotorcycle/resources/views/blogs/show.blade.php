@extends('layout.index')
@section('content')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Blogs</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Blogs</li>
                    <li class="breadcrumb-item active">Blog detail</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title : </strong>
                    {{$blog->title}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description : </strong>
                    {{$blog->description}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Author : </strong>
                    {{$blog->createdBy}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image : </strong>
                    {{$blog->image}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date : </strong>
                    {{$blog->created_at}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last update : </strong>
                    {{$blog->updated_at}}
                </div>
            </div>

            <br><br>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Content : </strong>
                    {{$blog->content}}
                </div>
            </div>

        </div>

    </main>


@endsection
