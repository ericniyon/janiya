<?php

use App\Models\Color;
use App\Models\ProductSize;
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
            $table->dropForeign('store_attributes_product_attribute_id_foreign');
            $table->dropColumn('product_attribute_id');
            $table->after('store_id',function($table){
                $table->foreignIdFor(ProductSize::class)->nullable()->constrained();
                $table->foreignIdFor(Color::class)->nullable()->constrained();
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
            $table->dropForeign('store_attributes_color_id_foreign');
            $table->dropForeign('store_attributes_product_size_id_foreign');
            $table->dropColumn('color_id','product_size_id');
        });
    }
};
