@extends('welcome')
@section('content')
    <h3>Our posts</h3>
@foreach($posts as $post)
    <h3>{{ $post->title }}</h3>
    <div>
        <span>{{ $post->post_content }} - </span>
        <span>{{ $post->likes }}</span>
    </div>
    <hr>

@endforeach
@endsection
