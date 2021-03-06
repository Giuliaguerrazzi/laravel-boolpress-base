
@extends('layouts.main')

@section('content')

    <div class='container mb-5'>
        <h1>Edit: {{$post->title}}</h1>

        <!-- errori -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

       <form action="{{route('posts.update', $post->id)}}" method="POST" enctype='multipart/form-data'>
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="title">Title</label>
                <input class='form-control' type="text" name="title" id="title" value="{{old('title', $post->title)}}">
            </div>

            <div class="form-group">
                <label for="body">Description</label>
                <textarea class='form-control' name="body" id="body">{{old('body', $post->body)}}</textarea>
            </div>

            <div class="form-group">
                <label for="path_img">Post image</label>
                @isset ($post->path_img)
                    <div class='wrap-image'>
                        <img width='200' src="{{asset('storage/' . $post_img)}}" alt="">
                    </div>
                    
                @endisset
               <input class='form-cotrol' type="file" name="path_img" id="path_img" accept="image/*">
            </div>

            <div class='form-group'>
                <input class='btn btn-primary' type="submit" value='update post'>
            </div>
       </form>
    </div>
   
@endsection 