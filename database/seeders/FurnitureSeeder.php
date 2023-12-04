<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FurnitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        foreach (range(1, 50) as $index) {
            DB::table('furniture')->insert([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2, 50, 500),
                'type' => $faker->randomElement(['chair', 'table', 'door', 'misc']),
                'image' => $faker->imageUrl(), // Generate a placeholder image URL
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
