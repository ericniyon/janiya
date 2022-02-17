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
        Schema::create('product_valiations', function (Blueprint $table) {
            $table->id();
            $table->string('quantity');
            $table->string('price');
            $table->unsignedBigInteger('product_color');
            $table->unsignedBigInteger('product_size');
            $table->unsignedBigInteger('product_name');
            

            $table->foreign('product_color')->references('id')->on('colors')->onDelete('cascade');
            $table->foreign('product_size')->references('id')->on('product_sizes')->onDelete('cascade');
            $table->foreign('product_name')->references('id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('product_valiations');
    }
};
