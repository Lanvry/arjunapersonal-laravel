<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 *  @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Download>
 */
class DownloadFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(rand(1,2), false),
            'img' => fake()->sentence(1),
            'deskripsi' => fake()->paragraph(),
            'slug' => Str::slug(fake()->sentence(rand(1,2), false))
        ];
    }
}
