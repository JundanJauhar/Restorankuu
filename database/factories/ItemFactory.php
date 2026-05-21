<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(),
            'price' => $this->faker->numberBetween(10000, 100000),
            'category_id' => \App\Models\Category::factory(),
            'description' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
            'is_active' => $this->faker->boolean(80), // 80% chance to be active
        ];
    }
}
