<?php

namespace App\Http\Controllers;

use App\Models\product;
use Cart;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function save_cart(Request $request)
    {
        $pro_id = $request->input('pro_id');
        $quantity = $request->input('quantity');
        $getpro = product::find($pro_id);
        $productName = $getpro->productName;
        $image = $getpro->image;
        $pro_new_price = $getpro->pro_new_price;

        $data = [
            'id' => $pro_id,
            'qty' => $quantity,
            'name' => $productName,
            'price' => $pro_new_price,
            'weight' => '12',
            'options' => [
                'image' => $image,
            ],
        ];
        Cart::add($data);

        return redirect()->back();
    }

    public function show_cart()
    {
        return view('cart.view');
    }

    public function delete_cart($rowId)
    {
        Cart::remove($rowId);

        return redirect()->back();
    }

    public function update_quantity(Request $request, $rowId)
    {
        Cart::update($rowId, $request->input('update_qty'));

        return redirect()->back();
    }
}
