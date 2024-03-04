<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
       $filter = app()->make(PostFilter::class, ['queryParams'=>array_filter($data)]);
//       this method from Trait (scopeFilter)
       $posts = Post::filter($filter)->paginate(10);

//        this elementary filtration was replaced with 3 classes in HTTP/Filters folder
//        $query = Post::query();
//        if(isset($data['category_id'])){
//            $query->where('category_id', $data['category_id']);
//        }
//        if(isset($data['title'])){
//            $query->where('title', 'like', "%{$data['title']}%");
//        }
//        if(isset($data['page_content'])){
//            $query->where('page_content', 'like', "%{$data['page_content']}%");
//        }
//        $posts  = $query->get();

        return view('post.index', compact('posts'));
    }
}
