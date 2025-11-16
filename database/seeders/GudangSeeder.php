<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GudangSeeder extends Seeder
{
    public function run(): void
    {
        // truncate gudangs dulu
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('gudangs')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $produksi = DB::table('produksis')->get();
        $data = [];

        foreach ($produksi as $item) {
            $jumlah = rand(50, 300);
            $stock = max(0, $jumlah - rand(0, 50));

            $data[] = [
                'kode_produksi'  => $item->kode_produksi,
                'jumlah'         => $jumlah,
                'stock'          => $stock,
                'tanggal_masuk'  => now()->subDays(rand(0, 10))->format('Y-m-d'),
                'created_at'     => now(),
                'updated_at'     => now(),
            ];
        }

        DB::table('gudangs')->insert($data);
    }
}
