<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class rekamMedisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pasien' => $this->faker->name(),
            'dokter' => $this->faker->name(),
            'kondisi' => $this->faker->sentence(mt_rand(2, 8)),
            'suhu' => mt_rand(35, 45)
        ];
    }
}
