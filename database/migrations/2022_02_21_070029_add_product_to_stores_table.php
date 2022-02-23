<?php

use App\Models\Product;
use App\Models\ProductValiations;
use App\Models\Vendor;
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
        Schema::table('stores', function (Blueprint $table) {
            $table->dropForeign('stores_product_valiations_id_foreign');
            $table->dropForeign('stores_user_id_foreign');
            $table->dropColumn('user_id','product_valiations_id','quantity');
            $table->after('id', function($table){
                $table->foreignIdFor(Vendor::class)->nullable()->constrained();
                $table->foreignIdFor(Product::class)->nullable()->constrained();
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
        Schema::table('stores', function (Blueprint $table) {
            $table->dropForeign('stores_product_id_foreign');
            $table->dropColumn('product_id');
            $table->after('id', function($table){
                $table->foreignIdFor(User::class)->nullable()->constrained();
                $table->foreignIdFor(ProductValiations::class)->nullable()->constrained();
                $table->integer('quantity');
            });
        });
    }
};
