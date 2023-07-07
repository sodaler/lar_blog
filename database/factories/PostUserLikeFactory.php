<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostUserLikeFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => User::query()->inRandomOrder()->value('id'),
            'post_id' => Post::query()->inRandomOrder()->value('id'),
        ];
    }
}
