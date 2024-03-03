<?php

namespace App\Services\Post;

use App\Models\Post;

class Service
{
    public function store($data)
    {
        $data['title'] = ucfirst($data['title']);
        $data['post_content'] = ucfirst($data['post_content']);

        $tags = $data['tags'];
        unset($data['tags']);
        $post = Post::create($data);

        $post->tags()->atach($tags);
    }

    public function update($post, $data)
    {
        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        $post->tags()->sync($tags);
    }
}
