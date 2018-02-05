@extends('layouts.app')

@section('content')

    <div class="title m-b-md">
        Posts
    </div>

    @if($posts)
    @foreach( $posts as $post)
        @php
        /*  <a href="{{ route('companies.show', $company->slug) }}">{{ $company->name }}</a> */
        @endphp
        <div class="container">
            <strong>{{ $post->title }}</strong>
            <br />
            Posted: <b>{{ $post->created_at->diffForHumans() }}</b>
            <p>{{ $post->body }}</p>
        </div>
    @endforeach
    @else
        There are no posts to display.
    @endif
@endsection