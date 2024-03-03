<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data =  $request->validated();
        $data['title'] = ucfirst($data['title']);
        $data['post_content'] = ucfirst($data['post_content']);

        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);

        $post->tags()->atach($tags);

        return redirect()->route('post.index');
    }
}
