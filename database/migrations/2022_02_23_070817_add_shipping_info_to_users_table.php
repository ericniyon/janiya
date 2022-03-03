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
        Schema::table('users', function (Blueprint $table) {
            $table->after('promo_code',function($table){
                $table->integer('partner_total_sales')->unsigned()->default(0);
            });
            $table->after('active',function($table){
                $table->string('address1')->nullable();
                $table->string('neighborhood')->nullable();
                $table->string('street_name')->nullable();
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('partner_total_sales','address1','neighborhood','street_name');
        });
    }
};
