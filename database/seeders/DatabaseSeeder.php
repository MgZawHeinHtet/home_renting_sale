<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\News;
use App\Models\PropertySale;
use App\Models\SalePropertyImage;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::create([
            'name' =>'zaw hein htet',
            'email' => 'zawhh1223@gmail.com',
            'password'=> 'admin123',
            'role'=>'agent'
        ]);

        User::create([
            'name' =>'honey',
            'email' => 'honey@gmail.com',
            'password'=> 'customer123',
            'role'=>'customer'
        ]);

        News::factory(20)->create();
        
        User::factory(10)->has(
            PropertySale::factory(10)->has(
                SalePropertyImage::factory()->count(4)
            )
        )->create();
    }
}
