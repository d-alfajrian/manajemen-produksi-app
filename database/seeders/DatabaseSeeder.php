<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Urutan penting: Produksi -> Gudang -> BarangKeluar
        $this->call([
            ProduksiSeeder::class,
            GudangSeeder::class,
            BarangKeluarSeeder::class,
        ]);
    }
}
