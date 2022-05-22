<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Category;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();
        for ($i = 1; $i <= 21; $i++) {
            Category::create([
                "name" => $this->faker->unique()->word,
                "describe" => $this->faker->sentence
            ]);
        }
    }
}
