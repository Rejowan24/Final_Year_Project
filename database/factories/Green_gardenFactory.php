<?php

namespace Database\Factories;

use App\Models\Green_Garden;
use Illuminate\Database\Eloquent\Factories\Factory;

class Green_gardenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Green_Garden::class;

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
            'image' => 'https://source.unsplash.com/random',
            'price' => $this->faker->numberBetween(100,500),
        ];
    }
}
