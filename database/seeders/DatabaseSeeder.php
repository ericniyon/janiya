<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        // \App\Models\Admin::factory(1)->create();
        // \App\Models\Vendor::factory(2)->create();
        // \App\Models\ProductCategory::factory(2)->create();
        Product::factory(10)->create();
    }
}
