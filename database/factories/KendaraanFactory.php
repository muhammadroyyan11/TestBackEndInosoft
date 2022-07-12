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
        $pilih = array(
            'motor',
            'mobil'
        );

        $random = array_rand($pilih);

        if ($pilih[$random] == 'motor') {
            return [
                'tahun_keluaran' => $this->faker->year(),
                'warna' => $this->faker->colorName(),
                'harga' => $this->faker->numberBetween($min = 10000000, $max = 700000000),
                'jenis_kendaraan' => 'motor',
                'stok' => $this->faker->numberBetween($min = 1000, $max = 9000),
                'terjual' => $this->faker->numberBetween($min = 1000, $max = 9000),
                'motor' => [
                    'mesin' => $this->faker->company(),
                    'suspensi' => $this->faker->domainWord(),
                    'transmisi' => $this->faker->domainWord()
                ]
            ];
        } else{
            return [
                'tahun_keluaran' => $this->faker->year(),
                'warna' => $this->faker->colorName(),
                'harga' => $this->faker->numberBetween($min = 10000000, $max = 700000000),
                'jenis_kendaraan' => 'mobil',
                'stok' => $this->faker->numberBetween($min = 1000, $max = 9000),
                'terjual' => $this->faker->numberBetween($min = 1000, $max = 9000),
                'mobil' => [
                    'mesin' => $this->faker->company(),
                    'kapasitas_penumpang' => $this->faker->numberBetween($min = 2, $max = 8),
                    'tipe' => $this->faker->domainWord()
                ]
            ];
        }
    }
}
