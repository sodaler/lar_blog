<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::published()->paginate(6);
        $randomPosts = Post::published()->count() >= 4 ? Post::published()->get()->random(4) : [];
        $likedPosts = Post::published()->withCount('likedUsers')
            ->orderBy('liked_users_count', 'DESC')
            ->get()
            ->take(4);
        return view('post.index', compact('posts', 'randomPosts', 'likedPosts'));
    }
}
