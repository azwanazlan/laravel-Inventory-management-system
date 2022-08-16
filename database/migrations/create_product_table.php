<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id('productid');
            $table->string('productlabel');
            $table->integer('brandid')->unsigned();
            $table->foreign('brandid')->references('brandid')->on('brand');
            $table->integer('categoryid')->unsigned();
            $table->integer('categoryid')->references('caregoryid')->on('category');
            $table->integer('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productid');
    }
};
