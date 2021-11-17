@extends('layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Product Image</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
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
                            <h5 class="card-title"></h5>
                            <div class="col-lg-12 text-center" style="margin-top: 10px;margin-bottom: 10px;float: right" >
                                <a href="{{route('gallery.create')}}" class="btn btn-success">Add</a>
                            </div>


                            <!-- Table with stripped rows -->
                            <div>


                                @if(sizeof($galleries) > 0)
                                    <table class="table datatable">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Thumbnails</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        @foreach($galleries as $galleri)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$galleri->ProductID}}</td>
                                                <td>{{$galleri->image}}</td>
                                                <td>{{$galleri->thumbnails}}</td>

                                                <td>
                                                    <form action="{{route('gallery.destroy',$galleri->id)}}" method="post">
                                                        <a href="{{route('gallery.show',$galleri->id)}}" class="btn btn-info">Show More</a>
                                                        <a href="{{route('gallery.edit',$galleri->id)}}" class="btn btn-primary">Edit</a>
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Delete </button>
                                                    </form>


                                                </td>
                                            </tr>
                                            @endforeach
                                            </tr>

                                            </tr>
                                        </tbody>
                                    </table>
                            @endif
                            {!!$galleries->links() !!}
                            <!-- End Table with stripped rows -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->




@endsection
