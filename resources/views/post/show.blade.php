@extends('welcome')
@section('content')
<div class="card">
    <div class="card-header">
        {{ $post->title }}
    </div>
    <div class="card-body">
        {{ $post->post_content }}
    </div>
</div>
    <a href="{{ route('post.index') }}" class="btn btn-outline-info mt-3">Back</a>
@endsection
