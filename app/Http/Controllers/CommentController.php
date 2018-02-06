<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Post;

class CommentController extends Controller
{
    /**
     * @param \App\Post $post
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Post $post)
    {
        $comment = new Comment();
        return view('comments.create', compact(['comment', 'post']));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Post $post
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Post $post)
    {
        /**
         * Validate the input against our validation rules
         *
         * https://laravel.com/docs/5.5/validation#available-validation-rules
         *
         * We can also define our own validation rules.
         */
        $this->validate($request, [
            'user_name' => 'required',
            'body' => 'required|max:255'
        ]);

        /**
         * If we're getting here we can go ahead and save the comment.
         *
         * We have the ability to mass assign the request variables to the model
         * vars, but we'll do it the long way here: https://laravel.com/docs/5.5/eloquent#mass-assignment
         */
        $comment = new Comment;
        $comment->user_name = $request->user_name;
        $comment->body = $request->body;
        $comment->post_id = $post->id;
        $comment->save();

        /**
         * Flash a success message and redirect back to the post.
         */
        $request->session()->flash('message', 'Comment was successfully added!');
        return redirect()->route('posts.show', $post->slug);
    }
}
