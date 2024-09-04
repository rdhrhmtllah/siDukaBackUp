<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $t = fake()->sentence();
        return [
            'slug' => Str::slug($t),
            'title' => $t,
            'status' => rand(0, 1),
            'author_id' => User::factory(),
            'isi' => fake()->text(),
        ];
    }
}
