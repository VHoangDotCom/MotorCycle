<?php

namespace Database\Seeders;
use Carbon\Carbon;
use App\Models\category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            [
                'cate_id'=>2,
                'categoryName' => 'Helmet',
                'description' =>'Fashion Helmet in Tonny Chopper',
                'created_at' =>Carbon::now()->addDays(1)
            ],
            [
                'cate_id'=>3,
                'categoryName' => 'Glove',
                'description' =>'Fashion Glove in Tonny Chopper',
                'created_at' =>Carbon::now()->addDays(1)
            ],
            [
            'cate_id'=>4,
            'categoryName' => 'Jacket',
            'description' =>'Fashion Jacket in Tonny Chopper',
            'created_at' =>Carbon::now()->addDays(1)
        ],
            [
                'cate_id'=>5,
                'categoryName' => 'Jean',
                'description' =>'Quality Jean in Tonny Chopper',
                'created_at' =>Carbon::now()->addDays(1)
            ],
            [
                'cate_id'=>6,
                'categoryName' => 'Boots',
                'description' =>'Variety Boots in Tonny Chopper',
                'created_at' =>Carbon::now()->addDays(1)
            ],

        ]);


    }
}
