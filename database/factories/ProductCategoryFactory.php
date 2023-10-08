<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'category_name'=> $this->faker->name,
            
            'category_image'=> $this->faker->imageUrl(),
            
        ];
    }
}
