<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KendaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tahun_keluaran' => $this->faker->year(),
            'warna' => $this->faker->colorName(),
            'harga' => $this->faker->numberBetween($min = 10000000, $max = 700000000),
            'motor' => [
                'mesin' => $this->faker->domainWord(),
                'suspensi' => $this->faker->company(),
                'transmisi' => $this->faker->domainWord(),
                'stok' => $this->faker->randomNumber(),
                'terjual' => $this->faker->randomNumber()
            ]
        ];
    }
}
