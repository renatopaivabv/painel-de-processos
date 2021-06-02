<?php

namespace Database\Factories;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Factories\Factory;

class PermissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Permission::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $display_name = $this->faker->words(2, true);

        return [
            'name' => \Illuminate\Support\Str::slug($display_name),
            'display_name' => $display_name,
        ];
    }

}
