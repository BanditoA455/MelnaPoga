<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('ordered_products');
        Schema::create('ordered_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('orderID');
            $table->foreign('orderID')->references('id')->on('orders');
            $table->unsignedBigInteger('ProductID');
            $table->foreign('ProductID')->references('id')->on('products');
            $table->integer('amount');
            $table->decimal('price', 38, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordered_products');
    }
}
