<?php

use App\Models\Vendor;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShopToOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_items', function (Blueprint $table) {
            $table->after('product_id', function ($table) {
                $table->foreignIdFor(Vendor::class)->nullable()->constrained('vendors')->onDelete('cascade');
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
        Schema::table('order_items', function (Blueprint $table) {
            $table->dropForeign('order_items_vendor_id_foreign');
            $table->dropColumn('vendor_id');
        });
    }
}
