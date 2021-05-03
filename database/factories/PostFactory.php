<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(10);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'short_description' => $this->faker->sentence(15),
            'description' => $this->faker->text(200),
            'image' => $this->faker->imageUrl(600, 480),
            'category_id' => rand(1, 3)
        ];
    }
}
