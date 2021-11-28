<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //table Cart
        Schema::create('Cart', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productCode',200)->nullable();
            $table->string('productName',200)->nullable();
            $table->string('title',200);
            $table->string('description',200)->nullable();
            $table->double('price')->nullable();
            $table->double('discount');
            $table->integer('quantity')->nullable();
            $table->string('warranty',200);
            $table->string('createdBy',200);
            $table->unsignedInteger('categoryID');
            $table->enum('status',['In Stock','Out of Stock']);
            $table->enum('productType',['0','1']);//0: Cart of people 1:Cart of motor
            $table->string('image',200)->nullable();
            $table->timestamps();

            $table->foreign('categoryID')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cart');
    }
}
