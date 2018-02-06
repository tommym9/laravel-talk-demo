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

@endsection