@extends('layout.index')
@section('content')

    <main id="main" class="main">


        <section class="section">
            <div class="row">
                <div class="col-lg-12">




                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Customer</h5>

                            @if($errors->any())
                                <div class="alert aler-danger">
                                    <strong>Oops!</strong>There were some problems with your input. <br><br>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>

                                </div>
                        @endif

                        <!-- Multi Columns Form -->
                            <form class="row g-3" action="{{route('customers.store')}}" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">UserName:</label>
                                    <input type="text" class="form-control" id="inputName5" name="username" placeholder="Enter the User Name">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputEmail5" class="form-label">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter the title">
                                </div>

                                <div class="col-md-12">
                                    <label for="inputPassword5" class="form-label">First Name :</label>
                                    <input type="text" class="form-control" id="inputPassword5" name="firstName" placeholder="Enter the First Name">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Last Name:</label>
                                    <input type="text" class="form-control" id="inputAddres5s" placeholder="Enter the Last Name" name="lastName">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Address:</label>
                                    <input type="text" class="form-control" id="inputAddres5s" placeholder="Enter the Address" name="address">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="inputAddres5s" placeholder="Enter the Email" name="email">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" id="inputAddres5s" placeholder="Enter the Phone Number" name="phone">
                                </div>


                                <div class="text-center" style="margin-top: 10px">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <a href="{{route('customers.index')}}" class="btn btn-primary">Back</a>
                                </div>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->
@endsection
