<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;

class DestroyController extends BaseController
{
    public function __invoke(Post $post): \Illuminate\Http\RedirectResponse
    {
        $post->delete();

        return redirect()->route('post.index');
    }
}
