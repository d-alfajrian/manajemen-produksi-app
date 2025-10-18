<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produksi;

class GudangFactory extends Factory
{
    public function definition(): array
    {
        return [
            'produksi_id' => Produksi::inRandomOrder()->first()->id ?? 1,
            'kode_produksi' => 'KD-' . $this->faker->unique()->numerify('###'),
            'nama_barang' => $this->faker->word(),
            'stock' => $this->faker->numberBetween(10, 500),
            'tanggal_masuk' => $this->faker->date(),
        ];
    }
}
