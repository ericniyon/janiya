<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'product_category_id' => 1, //instead of 1 the category id used i want to be random
        'name' => $this->faker->word,
        'slug' => Str::slug($this->faker->unique()->word, '-'),
        'description' => $this->faker->paragraph,
        'price' => $this->faker->randomFloat(2, 0, 10000),
        'factory_price' => $this->faker->randomFloat(2, 0, 10000),
        'product_image' => 'https://picsum.photos/500/300?random=2'
        ];
    }
}
