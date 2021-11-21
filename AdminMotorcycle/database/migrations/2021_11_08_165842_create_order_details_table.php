<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //table order_detailController
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity')->nullable();
            $table->double('price')->nullable();
            $table->unsignedInteger('productID')->nullable();

            $table->timestamps();

            $table->foreign('productID')->references('id')->on('products');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
