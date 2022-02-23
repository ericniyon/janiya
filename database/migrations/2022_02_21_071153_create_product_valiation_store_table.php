<?php

use App\Models\ProductValiations;
use App\Models\Store;
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
        Schema::create('product_valiation_store', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ProductValiations::class)->constrained();
            $table->foreignIdFor(Store::class)->constrained();
            $table->integer('quantity')->unsigned();
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
        Schema::dropIfExists('product_valiation_store');
    }
};
