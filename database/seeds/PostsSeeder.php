<?php

use App\Post;
use Illuminate\Database\Seeder;

/**
 * Class PostsSeeder
 */
class PostsSeeder extends Seeder
{

    public function run()
    {
        factory(Post::class, 5)->create();
    }
}