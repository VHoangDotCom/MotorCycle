<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_people', function (Blueprint $table) {
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
            $table->enum('productType',['Product for People']);

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
        Schema::dropIfExists('product_people');
    }
}
