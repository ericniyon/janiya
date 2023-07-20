<?php

namespace Database\Factories;

use App\Models\Vendor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name'=> $this->faker->name,
            'price'=> $this->faker->numberBetween(10000,100000),
            // 'discounted_price',
            'product_category_id'=>1,
            'description'=> $this->faker->paragraph,
            'product_image'=> $this->faker->imageUrl(),
            'vendor_id'=>1,
            // 'vendor_id'=>Vendor::factory(),
        ];
    }
}
