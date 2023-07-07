<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->words(2, true),
            'content' => $this->faker->text(100),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'is_published' => $this->faker->boolean,
            'preview_image' => $this->faker->fixturesImage('posts', ''),
            'main_image' => $this->faker->fixturesImage('posts', ''),
        ];
    }
}
