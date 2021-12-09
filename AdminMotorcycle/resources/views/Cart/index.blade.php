<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <a href="{{route('showCart')}}">showCart</a>
    </div>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/image/{{$product->image}}" alt="{{$product->productName}}">
                <div class="card-body">
                    <h5 class="card-title">{{$product->productName}}</h5>
                    <p class="card-text">
                        {{number_format($product->price)}} VNĐ
                    </p>
                    <p class="card-text">{{$product->description}}</p>
                    <a href="#"
                       data-url="{{route('addToCart',['id'=>$product->id])}}"
                       class="btn btn-primary add_to_cart">
                        Add to cart
                    </a>
                </div>
            </div>
        </div>
        @endforeach

        @foreach($categories as $category)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                {{-- <img class="card-img-top" src="/image/{{$product->image}}" alt="{{$product->productName}}"> --}}
                <div class="card-body">
                    <h5 class="card-title">{{$category->categoryCode}}</h5>
                    {{-- <p class="card-text">
                        {{number_format($product->price)}} VNĐ
                    </p>
                    <p class="card-text">{{$product->description}}</p>
                    <a href="#"
                       data-url="{{route('addToCart',['id'=>$product->id])}}"
                       class="btn btn-primary add_to_cart">
                        Add to cart
                    </a> --}}
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>





<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<script>

    function addToCart(event){
        event.preventDefault();
     let urlCart=$(this).data('url');

        $.ajax({
         type:"GET",
         url:urlCart,
         dataType:'json',
            success:function (data){

              if (data.code === 200){

                  alert('them san phan vao do hangf thanhf cong');
              }
         },
         error:function (){

         }
     })
    };
    $(function ()
        {
            $('.add_to_cart').on('click',addToCart);
        }
    )


</script>
</body>
</html>
