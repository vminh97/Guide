<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders'); 
            $table->string('ordercode');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products'); 
            $table->string('goods_code');
            $table->integer('quantity');
            $table->bigInteger('sale_price')->nullable();
            $table->string('product_image')->nullable();
            $table->tinyInteger('isCancer')->nullable();
            $table->bigInteger('product_price');
            $table->bigInteger('product_price_sale')->nullable();
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
        Schema::dropIfExists('order_detail');
    }
}
