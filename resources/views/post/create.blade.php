@extends('welcome')
@section('content')
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            <div id="titleHelp" class="form-text">Enter a title for a new post.</div>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea type="text" name="post_content" class="form-control" id="content" placeholder="Post content"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
