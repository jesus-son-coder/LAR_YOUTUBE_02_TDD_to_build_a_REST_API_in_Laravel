<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'title' => $this->faker->sentence(5),
            'content' => $this->faker->paragraphs(5, true),
            'primary_image' => '/images/primary-image.jpg',
            'thumbnail_image' => '/images/thumbnail.jpg',
            'slug' => $this->faker->sentence(5),
            'author' => $this->faker->name
        ];
    }
}
