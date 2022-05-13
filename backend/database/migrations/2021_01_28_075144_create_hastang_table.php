<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHastangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hastang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hastang_code');
            $table->string('hastang_title');
            $table->tinyInteger('status')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->boolean('isDisplay')->default('1');
            $table->longText('keyword');
            $table->longText('description')->nullable();
            $table->longText('show_order')->nullable();          
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
        Schema::dropIfExists('hastang');
    }
}
