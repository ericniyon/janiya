<?php

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
        Schema::table('orders', function (Blueprint $table) {
            $table->after('user_id',function($table){
                $table->foreignIdFor(Vendor::class)->nullable()->constrained();
            });
        });

        Schema::table('order_items', function(Blueprint $table){
            $table->dropForeign('order_items_shop_foreign');
            $table->dropColumn('shop');
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
            $table->dropForeign('orders_vendor_id_foreign');
            $table->dropColumn('vendor_id');
        });

        Schema::table('order_items', function(Blueprint $table){
            $table->after('product_id', function($table){
                $table->foreignId('shop')->nullable()->constrained('vendors');
            });
        });
    }
};
