@extends('layouts.blog')

@section('title', 'My Awesome Blog Post')

@section('content')
    @php
        $postTitle = "Exploring Laravel Blade Templates";
        $author = "Iris Claire Solano";
        $body = "This post is about exploring laravel blade templates";
    @endphp

    <article>
        <h2> {{ $postTitle }}</h2>
        <p> Written by: <strong> {{ $author }}</strong></p>

        @if ($author === "Admin")
            <span  class=" badge admin-badge"> Admin Post</span>
            
        @else
             <span  class=" badge user-badge"> Regular User Post </span>
 
        @endif

        <div style="margin-top: 20px"> 
            {{ $body }}
        </div>
    </article>

@endsection