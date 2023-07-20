<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vendor>
 */
class VendorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shop_name' => $this->faker->company(),
            'email' => $this->faker->unique()->companyEmail(),
            'location'=>$this->faker->address(),
            'phone' => $this->faker->unique()->e164PhoneNumber(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'contact_person'=>$this->faker->name(),
            'contact_person_email'=>$this->faker->unique()->safeEmail(),
            'contact_person_phone'=>$this->faker->unique()->e164PhoneNumber(),
            'profile_image'=>$this->faker->imageUrl(),
            'cover_image'=>$this->faker->imageUrl(),
        ];
    }
}
