@extends('welcome')
@section('content')
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title"
                   value="{{ $post->title }}">
            <div id="titleHelp" class="form-text">Enter a title for a new post.</div>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea type="text" name="post_content" class="form-control" id="content" placeholder="Post content"
            >{{ $post->post_content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image"
                   value="{{ $post->image }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
