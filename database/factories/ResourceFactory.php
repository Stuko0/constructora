<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Resource;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resource>
 */
class ResourceFactory extends Factory
{
    protected $model = Resource::class;
    public function definition(): array
    {
        return [
            'type' => fake()->randomElement(['Material', 'Maquinaria', 'Equipamento']),
            'name' => fake()->word(),
            'description' => fake()->optional()->paragraph(),
            'cost_per_unit' => fake()->randomFloat(2, 10, 1000),
            'quantity' => fake()->numberBetween(1, 500),
            'total' => fake()->randomFloat(2, 1000, 50000),
            'stock' => fake()->numberBetween(1, 500),
            'availability' => fake()->randomElement(['Available', 'Unavailable']),
        ];
    }
}
