<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Random\RandomException;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Post::class;

    /**
     * @throws RandomException
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->jobTitle(),
            'post_content'=>$this->faker->text(100),
            'image'=>$this->faker->imageUrl(),
            'likes'=>random_int(1,100),
            'is_published'=>1,
            'category_id'=>Category::get()->random()->id
        ];
    }
}
