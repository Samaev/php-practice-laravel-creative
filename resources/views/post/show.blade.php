@extends('welcome')
@section('content')
<div class="card">
    <div class="card-header">
        {{ $post->title }}
    </div>
    <div class="card-body">
        {{ $post->post_content }}
    </div>
    <div class="card-footer d-flex justify-content-around">
        <a class="btn btn-outline-secondary" href="{{ route('post.edit', $post->id) }}">Edit</a>
        <a class="btn btn-danger" href="{{ route('post.update', $post) }}">Delete</a>
    </div>
</div>
    <a href="{{ route('post.index') }}" class="btn btn-outline-info mt-3">Back</a>
@endsection
