<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

class ProductFactory extends Factory
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
            'image' =>$this->faker->text,
            'description' =>$this->faker->text,
            'price' =>rand(100,1000000),
            'quantity' =>rand(1,1000),
            'category_id' =>Category::all()->random()->id,

        ];
    }
}
