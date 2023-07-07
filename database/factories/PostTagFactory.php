<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostTagFactory extends Factory
{
    public function definition()
    {
        return [
            'tag_id' => Tag::query()->inRandomOrder()->value('id'),
            'post_id' => Post::query()->inRandomOrder()->value('id'),
        ];
    }
}
