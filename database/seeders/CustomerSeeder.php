<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            \App\Models\Customer::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => '0'.$faker->numberBetween(81100000000, 85799999999),
                'address' => $faker->address,
            ]);
        }
           
    }
}
