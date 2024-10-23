<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->company,
            'category_id'=>rand(1,10),
            'user_id'=>rand(1,10),
            'price'=>rand(50,1000),
            'images'=>fake()->url(),
            'count'=>rand(1,25),
        ];
    }
}
