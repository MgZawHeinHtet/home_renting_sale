<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Amenity;
use App\Models\CreditPackage;
use App\Models\News;
use App\Models\PropertySale;
use App\Models\rule;
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
        
        User::create([
            'name' =>'admin',
            'email' => 'admin@gmail.com',
            'password'=> 'admin123',
            'role'=>'admin'
        ]);

        CreditPackage::create([
            'level' => 'basic',
            'point'=>4,
            'discount'=>0,
            'price'=>20000
        ]);

        CreditPackage::create([
            'level' => 'bronze',
            'point'=>8,
            'discount'=>5,
            'price'=>40000
        ]);

        CreditPackage::create([
            'level' => 'silver',
            'point'=>12,
            'discount'=>10,
            'price'=>60000
        ]);

        CreditPackage::create([
            'level' => 'gold',
            'point'=>20,
            'discount'=>15,
            'price'=>100000
        ]);

        CreditPackage::create([
            'level' => 'diamond',
            'point'=>40,
            'discount'=>20,
            'price'=>120000
        ]);

        News::factory(20)->create();
        
        User::factory(10)->has(
            PropertySale::factory(10)->has(
                SalePropertyImage::factory()->count(4)
            )
        )->create();

        Amenity::factory(14)->create();
        rule::factory(5)->create();
    }
}
