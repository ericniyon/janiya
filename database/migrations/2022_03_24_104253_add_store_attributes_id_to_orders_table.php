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
        Schema::table('orders', function (Blueprint $table) {
            $table->after('deleted_at',function($table){
                 $table->unsignedBigInteger('store_attributes_id')->nullable();
            });
            // $table->unsignedBigInteger('store_id');
            $table->foreign('store_attributes_id')->references('id')->on('store_attributes')->onDelete('set null');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_store_attributes_id_foreign');
            $table->dropColumn('store_attributes_id');

        });
    }
};
