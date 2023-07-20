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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('promo_code')->nullable();
            $table->string('affiliate_link')->nullable();
            $table->integer('sales')->unsigned()->default(0);
            $table->integer('clicks')->unsigned()->default(0);
            $table->integer('partner_total_sales')->unsigned()->default(0);
            $table->string('address1')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('street_name')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
