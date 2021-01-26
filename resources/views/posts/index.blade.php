
@extends('layouts.main')

@section('content')

    <div class='container mb-5'>
        <h1>BLOG Archive</h1>

        @forelse ($posts as $post)
            <article class='mb-5'>
                <h2>{{ $post->title }}</h2>

                <h5>{{ $post->created_at->format('d/m/Y') }}</h5>

                <p>{{ $post->body }}</p>

                @if (! empty($post->path_img))
                     <img src="{{ asset('storage/'. $post->path_img)}}" alt="">
                @endif    

                <a href="{{route('posts.show', $post->slug)}}">Read more</a>

            </article>

        @empty
            <p>No post found, go and <a href="{{route('posts.create') }}">create a new one</a> </p>
        @endforelse    
    </div>
   
@endsection 