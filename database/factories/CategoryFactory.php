<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{

    protected $model = Category::class;


    public function definition(): array
    {

        $category = [
            "Gaming Consoles",
            "PC Gaming",
            "Gaming Accessories",
            "Headphones & Audio",
            "Smartphones & Tablets",
            "Wearable Technology",
            "VR & AR Devices",
            "Computer Components",
            "Gaming Chairs & Furniture"
        ];


        return [
            'name' => $this->faker->randomElement($category)
        ];
    }
}
