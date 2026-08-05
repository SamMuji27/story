<?php

namespace Database\Factories;

use App\Models\Story;
// use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Support\Str;
// use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends Factory<Story>
 */
class StoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(mt_rand(2, 5)),
            // 'slug' => Str::slug(fake()->title()), //format slug faker generate
            'slug' => fake()->slug(),
            'excerpt' => fake()->paragraph(mt_rand(2, 5)),
            'author_id' => mt_rand(1, 3), //men generate id dan membuat data faker
            'text' => fake()->text(),
        ];
    }
}
