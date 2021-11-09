
@extends('layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables</h1>

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
                            <h5 class="card-title">Datatables</h5>
                            <div class="col-lg-12 text-center" style="margin-top: 10px;margin-bottom: 10px;float: right" >
                                <a href="{{route('category.create')}}" class="btn btn-success">Add</a>
                            </div>


                            <!-- Table with stripped rows -->
                            <div>


                            @if(sizeof($categories) > 0)
                            <table class="table datatable">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">More</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$category->categoryCode}}</td>
                                        <td>{{$category->title}}</td>
                                        <td>{{$category->content}}</td>
                                        <td>{{$category->status}}</td>
                                        <td>
                                            <form action="{{route('category.destroy',$category->id)}}" method="post">

                                                <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a>
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
                                @else
                                    <div class="alert alert-alert">Start Adding to the Database</div>
                            @endif
                            {!! $categories->links() !!}
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
