@extends('welcome')
@section('content')

    <div class="d-flex justify-content-between">
        <h3 class="display-3">Our posts</h3>
        <div><a href="{{ route('post.create') }}" class="btn btn-info">Add new post</a></div>
    </div>


    <div class="row justify-content-center">
        @foreach($posts as $key=>$post)
            <div class="card m-2 col-11 col-md-5 p-0">
                <div class="card-header text-center">
                    <h3><a href="{{ route('post.show', $post->id) }}">{{ ++$key }}. {{ $post->title }}</a></h3>
                </div>
                <div class="card-body">
                    <span>{{ $post->post_content }} - </span>
                </div>
                <div class="card-footer">
                    <span>{{ $post->likes }}</span>
                    <span>{{ $post->image }}</span>
                </div>
            </div>
        @endforeach
    </div>
@endsection
