@extends('welcome')
@section('content')
    <h3>Our posts</h3>
@foreach($posts as $post)
<div class="card mt-2">
   <div class="card-header">
       <h3><a href="{{ route('post.show', $post->id) }}">{{ $post->id }}. {{ $post->title }}</a></h3>
   </div>
    <div class="card-body">
        <span>{{ $post->post_content }} - </span>
    </div>
    <div class="card-footer">
        <span>{{ $post->likes }}</span>
    </div>
</div>


@endforeach
@endsection
