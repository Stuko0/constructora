<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Resource;
use App\Models\Task;
use App\Models\TaskResource;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TaskResource>
 */
class TaskResourceFactory extends Factory
{
    protected $model = TaskResource::class;
    public function definition(): array
    {
        return [
            'task_id' => Task::factory(),
            'resource_id' => Resource::factory(),
            'quantity' => fake()->numberBetween(1, 10),
        ];
    }
}
