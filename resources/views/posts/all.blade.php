@extends('layouts.app')

@section('content')

    <div class="title m-b-md">
        Posts
    </div>

    @if(count($posts) > 0)
        @foreach( $posts as $post)
            @php
            @endphp
            <div class="container">
                <strong><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></strong>
                <br />
                Posted: <b>{{ $post->created_at->diffForHumans() }}</b>
                <p>{{ $post->body }}</p>
            </div>
        @endforeach
    @else
        There are no posts to display.
    @endif
@endsection