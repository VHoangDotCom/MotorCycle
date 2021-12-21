<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateRoleUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->insert([
            ['name'=>'admin','display_name'=>'quản trị trang web'],
            ['name'=>'staff','display_name'=>'nhân viên bán hàng'],
            ['name'=>'content','display_name'=>'tạo bài tin tức cho trang '],


        ]);
    }
}
