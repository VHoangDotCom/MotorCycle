<?php

namespace Database\Seeders;
use App\Models\admin;
use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        admin::create([
            'username'=> 'admin',
            'password'=>'admin',
            'fullName'=> 'admin',
            'company'=> 'admin',
            'job'=> 'admin',
            'country'=> 'admin',
            'address'=> 'admin',
            'phone'=> 'admin',
            'email'=> 'admin',
            'about'=> 'admin',
            'image'=> 'admin',
            'twitter'=> 'admin',
            'facebook'=> 'admin',
            'instagram'=> 'admin',
            'linkedin'=> 'admin',
        ]);

    }
}
