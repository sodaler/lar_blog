<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\CategoryFactory;
use Database\Factories\CommentFactory;
use Database\Factories\PostFactory;
use Database\Factories\PostTagFactory;
use Database\Factories\PostUserLikeFactory;
use Database\Factories\TagFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        UserFactory::new()->count(10)->create();
        CategoryFactory::new()->count(20)->create();
        TagFactory::new()->count(10)->create();
        PostFactory::new()->count(20)->create();
        PostTagFactory::new()->count(20)->create();
        PostUserLikeFactory::new()->count(10)->create();
        CommentFactory::new()->count(10)->create();
    }
}
