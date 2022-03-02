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
        Schema::table('store_attributes', function (Blueprint $table) {
            $table->after('quantity',function($table){
                $table->integer('new_quantity')->unsigned()->default(0);
                $table->boolean('pre_order')->default(false);
                $table->boolean('order_confirmed')->default(false);
                $table->boolean('pre_order_confirmed')->default(false);
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('store_attributes', function (Blueprint $table) {
            //
        });
    }
};
