<?php

namespace Database\Factories;

use App\Models\Unity;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Unity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            'name' => $name,
            'description' => $this->faker->sentence(),
            'active' => true,
            'slug' => \Illuminate\Support\Str::slug($name),
            'logo' => 'caminho/completo/para/o-arquivo.pdf'
        ];
    }
}
