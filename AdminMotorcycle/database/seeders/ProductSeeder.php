<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product::create([
            'cate_id'=>1,
           'productName' =>'few',
           'title'=>'fewf',
            'description'=>'feef',
            'pro_new_price'=>123,
            'pro_old_price'=>123,
            'discount' =>123,
           'quantity' => 2,
        ]);
    }
}
