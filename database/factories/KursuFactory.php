<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kursu>
 */
class KursuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory()->create()->id,
            'naran_kursu'=>$this->faker->sentence(),
            'tipu_kursu'=>$this->faker->word(),
            'fatin_kursu'=>$this->faker->city(),
            'data_hahu'=>$this->faker->date(),
            'data_remata'=>$this->faker->date(),
            'fundus'=>$this->faker->country(),
            'feto'=>$this->faker->randomNumber(),
            'mane'=>$this->faker->randomNumber(),
            'total'=>$this->faker->randomNumber(),
        ];
    }
}

