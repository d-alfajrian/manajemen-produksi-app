<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produksi>
 */
class ProduksiFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode_produksi' => 'PRD-' . $this->faker->unique()->numberBetween(1000, 9999),
            'nama_barang' => $this->faker->word(),
            'jumlah_barang' => $this->faker->numberBetween(10, 500),
            'tanggal_produksi' => $this->faker->date(),
            'keterangan' => $this->faker->sentence(),
        ];
    }
}
