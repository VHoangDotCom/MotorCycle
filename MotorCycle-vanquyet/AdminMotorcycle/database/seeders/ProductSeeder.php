<?php

namespace Database\Seeders;

use App\Models\product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'pro_id' => 1,
                'cate_id' => 1,
                'productName' => 'Scorpion EXO-AT950 Helmet',
                 'title' =>'SCORPION',
                 'description' =>'This helmet is like having four helmets in one! It is a great option for riding multiple bikes and in multiple conditions. ',
                'quantity' => 200,
                 'pro_old_price' => 200,
                 'pro_new_price' => 124,
                 'pro_sale' => 12,
                 'productType' => 0,
                 'status' =>'In Stock',
                 'image' => 'https://www.revzilla.com/product_images/0195/1074/scorpion_exoat950_helmet_matte_black_750x750.jpg',
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            ]);
    }
}
