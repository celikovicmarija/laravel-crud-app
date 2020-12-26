<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    { 
        return [
            
        'firstName' =>  $this->faker->name,
        'lastName' => $this->faker->lastName,
        'email' => $this->faker->unique()->safeEmail,
        'city' => $this->faker->city,
        'country' =>  $this->faker->country,
        'birthDate' =>$this->faker->date,
        'active'=>$this->faker->boolean
        ];
    }
}
