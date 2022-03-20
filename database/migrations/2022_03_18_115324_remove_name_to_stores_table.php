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
        Schema::table('stores', function (Blueprint $table) {
            $table->dropUnique('stores_name_unique');
            $table->dropUnique('stores_slug_unique');
            $table->dropColumn('name');
            $table->dropColumn('slug');
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
            $table->after('id',function($table){
                $table->string('name')->nullable()->unique();
                $table->string('slug')->nullable()->unique();
            });
        });
    }
};
