<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public static function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $post = \request()->validate([
            'title' => 'string',
            'post_content' => 'string',
            'image' => 'string'
        ]);
        $post['title'] = ucfirst($post['title']);
        $post['post_content'] = ucfirst($post['post_content']);
        Post::create($post);

        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return (view('post.show', compact('post')));
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $new_post = \request()->validate([
            'title' => 'string',
            'post_content' => 'string',
            'image' => 'string'
        ]);
        $post->update($new_post);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('post.index');
    }


}
