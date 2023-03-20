<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bodyfat>
 */
class BodyfatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $startDate = Carbon::parse('2023-03-01');
        $endDate = Carbon::parse('2023-03-19');
        $randomDate = Carbon::createFromFormat('Y-m-d H:i:s', $this->faker->dateTimeBetween($startDate, $endDate)->format('Y-m-d H:i:s'));

        return [
            'user_id' => 1,
            'rate' => $this->faker->randomFloat(1, 10, 15),
            'chest' => $this->faker->randomFloat(1, 0, 100),
            'abdominal' => $this->faker->randomFloat(1, 0, 100),
            'thigh' => $this->faker->randomFloat(1, 0, 100),
            'bicpes' => null,
            'triceps' => null,
            'subscapular' => null,
            'suprailiac' => null,
            'created_at' => $randomDate,
        ];
    }
}
