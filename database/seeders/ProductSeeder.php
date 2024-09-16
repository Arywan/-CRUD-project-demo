<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 80; $i++) {
            DB::table('products')->insert([
                'name' => $faker->words(3, true), // Generates a realistic product name
                'detail' => $faker->sentence(20), // Generates a sentence for product details
            ]);
        }
    }
}
