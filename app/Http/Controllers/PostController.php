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
        foreach ($posts as $post){
            $post->title = ucfirst($post->title);
            $post->post_content = ucfirst($post->post_content);
        }
        return view('posts',compact('posts'));
    }
    public function showPanel(){
        return view('panel');
    }
    public function createPost(Request $request): string
    {
       $post = new Post();
       $post->title = $request->input('title');
       $post->post_content = $request->input('post_content');
       //dd($post);
       $post->save();
        return 'post save ok';
    }
    public function updatePost(Request $request): string
    {
        $post = Post::find($request->input('id'));
        $post->title = $request->input('title');
        $post->post_content = $request->input('post_content');
        $post->save();
        return 'post update ok';
    }
    public function deletePost(Request $request): string
    {
        $post = Post::find($request->input('id'));
        if($post) {
            $post->delete();
            return 'Post deleted successfully';
        } else {
            return 'Post not found';
        }
    }
}
