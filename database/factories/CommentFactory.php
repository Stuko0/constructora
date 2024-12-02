<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;
use App\Models\User;
use App\Models\Resource;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;
    public function definition(): array
    {
        return [
            'created_by' => User::factory(),
            'content' => fake()->paragraph(),
            'resource_id' => Resource::factory(),
        ];
    }
}
