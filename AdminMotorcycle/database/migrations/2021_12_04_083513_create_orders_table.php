<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{

    public function up()
    {

        Schema::create('orders', function (Blueprint $table) {
            $table->unsignedInteger('order_id')->autoIncrement();
            $table->unsignedInteger('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('city');
            $table->string('email');
            $table->string('new_email');
            $table->string('password');
            $table->string('district');
            $table->text('message')->nullable();
            $table->string('ward');
            $table->string('address');
            $table->string('order_total');
            $table->integer('order_qty');
            $table->tinyInteger('pay_method');
            $table->tinyInteger('order_status')->default(0);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

    }


    public function down()
    {

        Schema::dropIfExists('orders');

    }
}
