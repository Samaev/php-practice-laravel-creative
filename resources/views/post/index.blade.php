@extends('welcome')
@section('content')

    <div class="d-flex justify-content-between">
        <h3 class="display-3">Our posts</h3>
        <div><a href="{{ route('post.create') }}" class="btn btn-info">Add new post</a></div>
    </div>


    <div class="row justify-content-center">
        @foreach($posts as $post)
            <div class="card m-2 col-11 col-md-5 p-0">
                <div class="card-header text-center">
                    <h3 class="card-title"><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h3>
                </div>
                <div class="card-body">
                    <span>{{ $post->post_content }} - </span>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-primary">
                        Likes: <span class="badge bg-danger">{{ $post->likes }}</span>
                    </button>
                    <span>{{ $post->image }}</span>
                </div>
            </div>
        @endforeach
        <div class="mt-3 text-center">
            {{ $posts->withQueryString()->links() }}
        </div>
    </div>
@endsection
