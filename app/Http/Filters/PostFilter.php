<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const POST_CONTENT = 'post_content';
    public const CATEGORY_ID = 'category_id';


    protected function getCallbacks(): array
    {
        return [
            $this::TITLE => [$this, 'title'],
            $this::POST_CONTENT => [$this, 'post_content'],
            $this::CATEGORY_ID => [$this, 'categoryId'],
        ];
    }

    public function title(Builder $builder, $value): void
    {
        $builder->where('title', 'like', "%{$value}%");
    }
    public function post_content(Builder $builder, $value): void
    {
        $builder->where('post_content', 'like', "%{$value}%");
    }
    public function categoryId(Builder $builder, $value): void
    {
        $builder->where('category_id', $value);
    }
}
