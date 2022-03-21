<?php

namespace Database\Factories;

use App\Models\Oder;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id'=>Product::all()->random()->id,
            'oder_id'=>Oder::all()->random()->id,
        ];
    }
}
