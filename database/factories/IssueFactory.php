<?php

namespace Database\Factories;

use App\Models\Issue;
use Illuminate\Database\Eloquent\Factories\Factory;

class IssueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Issue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = ["aggressie fysiek", "aggressie verbaal"];

        return [
            'type'              => $types[array_rand($types)],
            'datetime'          => $this->faker->dateTime(),
            'duration_hour'     => $this->faker->numberBetween(0, 3),
            'duration_minute'   => $this->faker->numberBetween(1, 60),


        ];
    }
}
