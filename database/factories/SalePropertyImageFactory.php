<?php

namespace Database\Factories;

use App\Models\PropertySale;
use Illuminate\Database\Eloquent\Factories\Factory;
use PhpParser\Builder\Property;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SalePropertyImage>
 */
class SalePropertyImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'property_id'=>PropertySale::factory(),
            'image'=>fake()->imageUrl()
        ];
    }
}
