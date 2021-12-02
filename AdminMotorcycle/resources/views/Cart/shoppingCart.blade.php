<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card " data-url="{{route('deleteCart')}}">
                <div class="card-body">

                    <h5 class="card-title"> Categories List</h5>

                    <div class="card-body">
                        <h5 class="card-title"></h5>


                        <!-- Table with stripped rows -->
                        <div>




                            <table class="table  update_cart_url" data-url="{{route('updateCart')}}">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Qutity</th>
                                    <th scope="col"> Sub Total</th>
                                    <th scope="col">Image</th>

                                    <th scope="col">More</th>

                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $total=0;
                                @endphp

                                <tr>
                                @foreach($carts as $id=>$cart)
                                    @php

                                        $total += $cart['price'] * $cart['quantity'];

                                    @endphp
                                    <tr>
                                        <th  scope="row">{{$id}}</th>
                                        <td >{{$cart['name']}}</td>
                                        <td>{{ number_format($cart['price'])}} VND</td>
                                        <td><input type="number" min="1" value="{{$cart['quantity']}}" id="quantity" name="quantity" ></td>
                                        <td>

                                            {{number_format($cart['price'] * $cart['quantity']) }} VND
                                        </td>

                                        <td><img style="width: 100px;height: 100px;object-fit: contain"
                                                 src="/image/{{$cart['image']}}"   alt="{{$cart['name']}}" >
                                        </td>
                                        <td>
                                            <a href="" data-id="{{$id}}" class="btn btn-primary update_cart">Update</a>
                                            <a href="" data-id="{{$id}}" class="btn btn-danger delete_cart">Delete</a>
                                        </td>



                                    </tr>

                                @endforeach

                                </tbody>
                            </table>

                            <div class="row">
                                Totla: {{number_format($total)}} VND
                            </div>
                            <div class="row">
                                Vat(10%):{{number_format($total *0.1)}} VND
                            </div>
                            <div class="row">
                                Total + Vat:{{number_format($total + ($total *0.1))}} VND
                            </div>

                            <div class="row">
                                <a href="" class="btn btn-success">Check out</a>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
