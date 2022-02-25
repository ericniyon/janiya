<?php

use App\Models\Color;
use App\Models\ProductSize;
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
        Schema::create('store_valiations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Store::class)->constrained();
            $table->foreignIdFor(ProductSize::class)->constrained();
            $table->foreignIdFor(Color::class)->constrained();
            $table->integer('quantity')->unsigned()->default(0);
            $table->enum('status', ['Pending', 'Approved','Denied'])->default('Pending');
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
        Schema::dropIfExists('store_valiations');
    }
};
