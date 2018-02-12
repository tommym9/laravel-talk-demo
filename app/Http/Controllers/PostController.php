<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Returns a list of all the posts on the site. There are only 5 so no
     * need to paginate.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        /**
         * Returns a Laravel Collection.
         *
         * https://laravel.com/docs/5.5/collections
         */
        $posts = Post::orderBy('created_at')->paginate(3);

        /**
         * This refers to a template file at resources/views/posts/all.blade.php
         * Any variables we pass here in the array become available.
         */
        return view('posts.all', compact(
            'posts'
        ));
    }

    /**
     * Show a single post.
     *
     * @param $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        /**
         * Find the post via its slug from the Sluggable library. Else fail
         * with a ModelNotFoundException exception.
         */
        $post = Post::findBySlugOrFail($slug);

        // We can check auth here in a few ways.
        // https://laravel.com/docs/5.4/authorization#introduction

        /*
         * Return a view of the post itself.
         */
        return view('posts.show', compact(
            'post'
        ));
    }
}
