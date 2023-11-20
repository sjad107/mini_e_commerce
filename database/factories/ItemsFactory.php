<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Process\FakeProcessResult;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Items>
 */
class ItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 5, 1000),
            'quantity' =>$this->faker->numberBetween(0, 1000),
            'category_id'=> $this->faker->numberBetween(1, 10),
        ];
    }
}
