<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyRent>
 */
class PropertyRentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'property_number' => 'R-'.rand(1000,9999),
            'title'=>fake()->title(),
            'region'=>'yangon',
            'township'=>'hmawbi',
            'category'=>'apartment',
            'price'=> mt_rand(10000, 500000),
            'people'=> 5,
            'map'=>"17.1006,96.0438",
            'area'=> 234,
            'area_unit'=>'sqrt',
            'bathroom'=>2,
            'bedroom'=>3,
            'description'=>" Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ea repellat quia consectetur deserunt dignissimos quisquam repellendus fugit, voluptatum blanditiis tempore a repudiandae earum, eum asperiores maiores! Qui, dolorem cupiditate.",
            'amenities'=>json_encode('dsafdsaf'),
            'house_rules'=>json_encode('dsfdsf'),
            'nearby'=>'',
            'check_in'=>"12:00",
            'check_out'=>"24:00",
            'avg_rating'=>'5',
            'rating'=>'5',
            'is_featured'=>false,
            'agent_id'=> User::factory()
        ];
    }
}
