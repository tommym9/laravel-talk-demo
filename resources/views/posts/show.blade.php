<?php
/**
 * Available variables
 *  - Post: The Post model
 *  - Comments: A collection of comments for this post @todo
 */
?>

@extends('layouts.app')

@section('content')

    <div class="title m-b-md">
        {{ $post->title }}
    </div>

    Posted: <b>{{ $post->created_at->diffForHumans() }}</b>

    <p>{{ $post->body }}</p>

    <a href="{{ route('comments.create', $post->id) }}">Add a comment</a>


    @if(count($post->comments) > 0)
        <h3>Comments</h3>
        @each('comments.show', $post->comments, 'comment')
    @endif

@endsection