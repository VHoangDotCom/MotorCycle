<?php

namespace Database\Seeders;
use  DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('admins')->insert([
            [
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'fullName'=> 'admin',
                'company'=> 'admin',
                'job'=> 'admin',
                'country'=> 'admin',
                'address'=> 'admin',
                'phone'=> '123456',
                'about'=> 'admin',
                'image'=> 'admin',
                'twitter'=> 'admin',
                'facebook'=> 'admin',
                'instagram'=> 'admin',
                'linkedin'=> 'admin',
            ]
        ]);
    }
}
