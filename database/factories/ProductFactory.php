<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
     protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name'=> fake()->name(),
            'description' => fake()->paragraph,
            'price' => fake()->randomFloat(2, 10000, 1000000),
            'categories_id' => Category::inRandomOrder()->first()->id,
            'brand_id' => Brand::inRandomOrder()->first()->id
        ];
    }
}
