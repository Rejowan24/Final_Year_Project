<?php

namespace Database\Factories;

use App\Models\Foodcourt;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodcourtFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Foodcourt::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'short_description' => $this->faker->text(30),
            'image' => 'food_'.$this->faker->unique()->numberBetween(1,30),
            'price' => $this->faker->numberBetween(100,500),
        ];
    }
}
