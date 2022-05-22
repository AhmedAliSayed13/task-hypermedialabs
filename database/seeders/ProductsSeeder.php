<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Product;
class ProductsSeeder extends Seeder
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
            Product::create([
                "name" => $this->faker->unique()->word,
                "price" => $this->faker->randomDigit,
                "category_id"=>$this->faker->numberBetween(1, 20),
            ]);
        }
    }
}
