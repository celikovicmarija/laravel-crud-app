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
        'title' => $this->faker->sentence($nbWords = 10),
        'postContent' => $this->faker->text($maxNbChars = 300),
        'author' => $this->faker->name,
        'date' => now(),
        'topic' => $this->faker->word,
        'readingTime' => rand(2,25),

        ];
    }

}
