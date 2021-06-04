<?php

namespace Database\Factories;

use App\Models\Coordination;
use Illuminate\Database\Eloquent\Factories\Factory;

class CoordinationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coordination::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'description' => $this->faker->sentence(),
            'active' => true
        ];
    }
}
