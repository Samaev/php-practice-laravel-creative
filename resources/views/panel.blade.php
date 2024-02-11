@extends('welcome')
@section('content')
    <h1>Create post here</h1>
    <form action="\savepost" method="get">
        <input type="text" name="title" id="title">
        <input type="text" name="post_content" id="post_content">
        <input type="submit" value="Create">
    </form>

    <h1>Update post here</h1>
    <form action="\updatepost" method="get">
        <input type="number" min="1" name="id" id="id">
        <input type="text" name="title" id="title">
        <input type="text" name="post_content" id="post_content">
        <input type="submit" value="Update">
    </form>

    <h1>Delete post here</h1>
    <form action="\deletepost" method="get">
        <input type="number" min="1" name="id" id="id">
        <input type="submit" value="Delete">
    </form>
@endsection
