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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('orderNo')->unique();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('street')->nullable();
            $table->text('neighborhood')->nullable();
            $table->foreignId('promoter')->nullable()->constrained('users');
            $table->integer('discount')->nullable();
            $table->decimal('total', 10, 0);
            $table->enum('payment_method', ['On Delivery', 'Card', 'Phone'])->nullable()->default('On Delivery');
            $table->enum('Status', ['Pending', 'Paid','On Delivery', 'Completed', 'Error', 'Cancelled'])->default('Pending');
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
};
