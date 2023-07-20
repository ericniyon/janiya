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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name');
            $table->string('location');
            $table->string('slug')->unique();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('contact_person')->index();
            $table->string('contact_person_email')->nullable()->index()->unique();
            $table->string('contact_person_phone')->nullable()->index()->unique();
            $table->boolean('confirmed')->default(false);
            $table->boolean('active')->default(true);
            $table->text('details')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile_image')->nullable();
            $table->string('cover_image')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('vendors');
    }
};
