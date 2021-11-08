<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //table admin
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',50)->nullable()->unique();
            $table->string('password',200)->nullable();
            $table->string('fullName',200)->nullable();
            $table->string('company',255);
            $table->string('job,255');
            $table->string('country',255);
            $table->string('address',255);
            $table->string('phone',255);
            $table->string('email',255);
            $table->string('about',255);
            $table->string('image',255);
            $table->string('twitter',255);
            $table->string('facebook',255);
            $table->string('instagram',255);
            $table->string('linkedin',255);
            $table->timestamps();



        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
