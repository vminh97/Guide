<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('goods_code');
            $table->text('slug_url')->nullable();
            $table->string('name_product');
            $table->integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->LongText('introduction_product');
            $table->LongText('content_product');
            $table->LongText('title_procduct');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category'); 
            $table->integer('certificate_id')->unsigned();
            $table->foreign('certificate_id')->references('id')->on('certificates');  
            $table->string('name_brand')->nullable();
            $table->integer('price');
            $table->integer('price_no_tax')->nullable();
            $table->integer('price_offsale')->nullable();
            $table->integer('price_offsale_no_tax')->nullable();
            $table->text('product_image');
            $table->text('product_image_text');
            $table->text('video');
            $table->LongText('material_name')->nullable();
            $table->LongText('hashtag_name')->nullable();
            $table->text('search_keywords')->nullable();
            $table->text('list_image')->nullable();
            $table->boolean('isPublic')->nullable();
            $table->boolean('isRefund')->nullable();
            $table->boolean('isCertification')->nullable();
            $table->boolean('isOnlinePayment')->nullable();
            $table->boolean('isRate')->nullable();
            $table->boolean('isFreeShip')->nullable();
            $table->dateTime('timeRefund')->nullable();
            $table->integer('count_video')->nullable();
            $table->string('sum_time_video');
            $table->dateTime('date_start')->nullable();
            $table->dateTime('date_end')->nullable();
            $table->integer('count_discount')->nullable();
            $table->string('discount_code')->nullable();
            $table->string('activation code')->nullable();
            $table->dateTime('date_promotion_start')->nullable();
            $table->dateTime('date_promotion_end')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('products');
    }
}
