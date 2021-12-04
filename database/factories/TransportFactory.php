<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Transport;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transport::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'car_number' => $this->faker->randomLetter(1) . $this->faker->randomDigit(3) . $this->faker->randomLetter(2) -> $this->faker->randomDigit(3),
            'total_seats' => $this->faker->randomNumber(),
            'model_id' => $this->faker->randomNumber(),
        ];
    }
}
