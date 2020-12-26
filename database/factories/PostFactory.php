<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Contact;
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
        $contacts = Contact::all()->pluck('id')->toArray();
        $topics=['IT','DevOps','WebDev','PHP','Laravel','Backend','Frontend','MySQL','REST','Science','Tech','News','Version Update'];
        return [
        'title' => $this->faker->sentence($nbWords = 3),
        'postContent' => $this->faker->text($maxNbChars = 250),
        'date' => now(),
        'topic' => $this->faker->randomElement($topics),
        'readingTime' => rand(2,25),
        'contactId'=>$this->faker->randomElement($contacts)

        ];
    }

}
