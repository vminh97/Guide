<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('comments', function (Blueprint $table) {
                $table->increments('id');
                $table->string('goods_code');
                $table->integer('customer_id')->unsigned();
                $table->foreign('customer_id')->references('id')->on('customers');
                $table->integer('product_id')->unsigned();
                $table->foreign('product_id')->references('id')->on('products');
                $table->string('customers_code');
                $table->string('customers_name')->nullable();
                $table->text('content_comment');
                $table->integer('star_comment')->nullable();
                $table->text('comment_image')->nullable();
                $table->string('status')->nullable();
                $table->boolean('isPublic')->nullable();
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
        Schema::dropIfExists('comments');
    }
}
