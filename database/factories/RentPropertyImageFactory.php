<?php

namespace Database\Factories;

use App\Models\PropertyRent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RentPropertyImage>
 */
class RentPropertyImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'property_id'=>PropertyRent::factory(),
            'image'=>fake()->imageUrl()
        ];
    }
}
