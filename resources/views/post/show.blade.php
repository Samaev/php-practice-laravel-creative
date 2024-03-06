@extends('welcome')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center text-capitalize">
                <h1 class="text-capitalize">{{  $post->title }}</h1>
            </div>
            <div class="card-body d-flex justify-content-center align-items-center">

                <div class="text-center rounded-1">
                    <img class="rounded-3 me-3" style="height: 200px;width: auto" src="{{ $post->image }}" alt="">
                </div>
                {{ $post->post_content }}

            </div>
            <div class="card-footer d-flex justify-content-around">
                <a class="btn btn-outline-secondary" href="{{ route('post.edit', $post->id) }}">Edit</a>
                <form action="{{ route('post.delete', $post->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" href="">Delete</button>
                </form>

            </div>
        </div>
        <a href="{{ route('post.index') }}" class="btn btn-outline-info mt-3">Back</a>
    </div>
@endsection
