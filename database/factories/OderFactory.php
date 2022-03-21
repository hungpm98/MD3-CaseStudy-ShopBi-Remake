<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name(),
            'user_id'=>User::all()->random()->id,
            'date_oder' =>$this->faker->date(),
            'total' =>rand(100,1000000),
            'payment'=>rand(100,1000000),
        ];
    }
}
