<?php

namespace Database\Factories;

use App\Models\Egg;
use Illuminate\Database\Eloquent\Factories\Factory;

class EggFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Egg::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->numberBetween(1,999),
            'weight' => $this->faker->numberBetween(50,99),
            'iots_id' => $this->faker->numberBetween(1,6),
        ];
    }
}

