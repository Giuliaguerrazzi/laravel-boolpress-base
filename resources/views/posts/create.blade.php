
@extends('layouts.main')

@section('content')

    <div class='container mb-5'>
        <h1>Create new post</h1>

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

       <form action="{{route('posts.store')}}" method="POST" enctype='multipart/form-data'>
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title">Title</label>
                <input class='form-control' type="text" name="title" id="title" value="{{old('title')}}">
            </div>

            <div class="form-group">
                <label for="body">Description</label>
                <textarea class='form-control' name="body" id="body">{{old('body')}}</textarea>
            </div>

            <div class="form-group">
                <label for="path_img">Post image</label>
               <input class='form-cotrol' type="file" name="path_img" id="path_img" accept="image/*">
            </div>

            <div class='form-group'>
                <input class='btn btn-primary' type="submit" value='create post'>
            </div>
       </form>
    </div>
   
@endsection 