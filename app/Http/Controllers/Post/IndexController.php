<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::published()->paginate(6);
        $randomPosts = Post::query()->randomPosts(2);
        $likedPosts = Post::query()->likedPosts(4);
        return view('post.index', compact('posts', 'randomPosts', 'likedPosts'));
    }
}
