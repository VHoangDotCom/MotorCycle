<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTotalOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //total_order
        Schema::create('total_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status')->nullable();
            $table->unsignedInteger('pro_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('pro_id')->references('pro_id')->on('products');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('total_orders');
    }
}
