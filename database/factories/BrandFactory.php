<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{

    protected $model = Brand::class;

    public function definition(): array
    {

        $brand = [
    "Sony",
    "Microsoft",
    "Nintendo",
    "Razer",
    "Logitech",
    "Corsair",
    "Asus",
    "MSI",
    "Apple",
    "Samsung",
    "HP",
    "Dell",
    "Lenovo",
    "HyperX",
    "SteelSeries"
];


        return [
            'name'=> $this->faker->randomElement($brand)
        ];
    }
}
