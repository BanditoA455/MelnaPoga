<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('cart');
        Schema::create('cart', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('orderID');
            // $table->foreign('orderID')->references('id')->on('orders');
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('id')->on('users');
            $table->unsignedBigInteger('ProductID');
            $table->foreign('ProductID')->references('id')->on('products');
            $table->integer('amount');
    });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
