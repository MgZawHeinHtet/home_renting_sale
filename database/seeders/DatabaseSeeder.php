<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();


        User::create([
            'name' =>'zaw hein htet',
            'email' => 'zawhh1223@gmail.com',
            'password'=> 'admin123',
            'role'=>'agent'
        ]);

        News::factory(20)->create();
    
    }
}
