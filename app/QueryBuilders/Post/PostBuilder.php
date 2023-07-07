<?php

namespace App\QueryBuilders\Post;

use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;

class PostBuilder extends Builder
{
    public function likedPosts($count)
    {
        return $this->published()
            ->withCount('likedUsers')
            ->orderBy('liked_users_count', 'DESC')
            ->get()
            ->take($count);
    }

    public function randomPosts($count)
    {
        return $this->published()->count() >= $count ? Post::published()->get()->random($count) : [];
    }
}
