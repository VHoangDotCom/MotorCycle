<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Cart;
use Session;

class cartController extends Controller
{

    public function addToCart(Request $request)
    {
        $pro_id = $request->input('pro_id');

        $getpro = product::find($pro_id);
        $quantity=$getpro->quantity;
        $pro_name = $getpro->productName;
        $pro_image = $getpro->image;
        $pro_new_price = $getpro->pro_new_price;

        $data = [
            'id' => $pro_id,
            'qty' => 1,
            'name' => $pro_name,
            'price' => $pro_new_price,
            'weight' => '12',
            'options' => [
                'image' => $pro_image,
            ],
        ];
        Cart::add($data);

        return redirect('/ShoppingCart');

    }
}
