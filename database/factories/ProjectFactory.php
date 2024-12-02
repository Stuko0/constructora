<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;
    public function definition(): array
    {
        return [
            'location' => fake()->city(),
            'name' => fake()->company(),
            'description' => fake()->paragraph(),
            'start_date' => fake()->date(),
            'end_date' => fake()->optional()->date(),
            'status' => fake()->randomElement(['Pending', 'In Progress', 'Success']),
            'total' => fake()->randomFloat(2, 1000, 100000),
            'created_by' => User::factory(),
        ];
    }
}
