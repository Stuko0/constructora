<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Budget;
use App\Models\Project;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budget>
 */
class BudgetFactory extends Factory
{
    protected $model = Budget::class;
    public function definition(): array
    {
        return [
            'project_id' => Project::factory(),
            'estimated_cost' => fake()->randomFloat(2, 1000, 100000),
            'actual_cost' => fake()->optional()->randomFloat(2, 1000, 100000),
        ];
    }
}
