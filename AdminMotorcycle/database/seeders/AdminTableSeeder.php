<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admin::create([
            'email' => 'abc@gmail.com',
            'password' => bcrypt('hello123'),
            'fullName' => 'NVH',
            'company' => 'FPT',
            'job' => 'Designer',
            'country' => 'Viet Nam',
            'address' => 'Hai Duong',
            'phone' => '232132432342',
            'about' => '',
            'image' => 'me.jpg',
            'twitter' => 'hello123',
            'facebook' => 'hello123',
            'instagram' => 'hello123',
            'linkedin' => 'hello123',
        ]);
    }
}
