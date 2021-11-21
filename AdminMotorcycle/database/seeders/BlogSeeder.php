<?php

namespace Database\Seeders;
use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([

        'blogCode' => 'bl01',
        'title' => 'cay',
        'image'=>'https://www.google.com/url?sa=i',
        'description'=>'fwef',
        'content'=>'fewfewfgweyfguewgfuyewgfye',
        'createdBy'=>'ewfewfewfewf',
        ]);
    }
}
