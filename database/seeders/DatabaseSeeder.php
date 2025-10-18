<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produksi;

class ProduksiSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama_produksi' => 'Produksi A'],
            ['nama_produksi' => 'Produksi B'],
            ['nama_produksi' => 'Produksi C'],
        ];

        foreach ($data as $item) {
            Produksi::create($item);
        }
    }
}
