<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertySale>
 */
class PropertySaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'type'=> 'apartment',
            'floor'=>fake()->numberBetween(1,20),
            'price'=>fake()->randomNumber(),
            'areaType'=>'l*w',
            'length'=>fake()->numberBetween(1,20),
            'width'=>fake()->numberBetween(1,20),
            'furnished'=>'not furnished',
            'bedroom'=>fake()->numberBetween(1,20),
            'bathroom'=>fake()->numberBetween(1,20),
            'region'=> 'yangon',
            'township'=>"hmawbi",
            'phoneNumber'=>"123456789",
            'description'=>fake()->paragraph(),
            'view'=>fake()->randomNumber(),
            'enquiry'=>fake()->randomNumber(),
            'map'=>'false',
            'agent_id'=>User::factory()
        ];
    }
}
