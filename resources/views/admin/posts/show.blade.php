@extends('layouts.admin')

@section('content')
<div class="container">
   <h1>{{ $post->title }}</h1>

   <p>{{ $post->content }}</p>

   <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-warning">edit</a>    
   <a href="" class="btn btn-danger">delete</a>    
</div>
@endsection

@section('title')
    {{ $post->title }}
@endsection