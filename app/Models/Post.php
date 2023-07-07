<?php

namespace App\Models;

use App\QueryBuilders\Post\PostBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
      'title',
      'content',
      'category_id',
      'preview_image',
      'main_image',
      'is_published',
    ];

    protected $table = 'posts';

    protected $withCount = ['likedUsers'];
    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }

    public function likedUsers()
    {
        return $this->belongsToMany(User::class, 'post_user_likes', 'post_id', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', 1)->orderBy('created_at', 'desc');
    }

    public function newEloquentBuilder($query)
    {
        return new PostBuilder($query);
    }
}
