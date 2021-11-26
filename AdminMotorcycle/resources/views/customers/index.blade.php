@extends('layout.index')
@section('content')




    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Customers</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Customers</li>
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

                            <div>
                                <div class="card-body">
                                    <h5 class="card-title">Customers List</h5>
                                    <div class="dataTable-top" style="float: right" >
                                        <a href="{{route('customers.create')}}"  class="btn btn-success"><i class="bi bi-plus">  Add</i></a>
                                    </div>

                                    <div>


                                @if(sizeof($customers) > 0)
                                    <table class="table datatable">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">username</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Show More</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        @foreach($customers as $customer)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$customer->firstName}}</td>
                                                <td>{{$customer->lastName}}</td>
                                                <td>{{$customer->username}}</td>
                                                <td>{{$customer->phone}}</td>

                                                <td>
                                                    <form action="{{route('customers.destroy',$customer->id)}}" method="post">
                                                        <a href="{{route('customers.show',$customer->id)}}" class="btn btn-info">Show More</a>
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
                            {!!$customers->links() !!}
                            <!-- End Table with stripped rows -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->




@endsection
