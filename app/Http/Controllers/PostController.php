<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request) {

        $posts = Post::orderBy('created_at')->get();

        return view('posts.all', compact(
            'posts'
        ));
    }
}
