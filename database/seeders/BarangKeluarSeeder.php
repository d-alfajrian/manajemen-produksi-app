<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangKeluarSeeder extends Seeder
{
    public function run(): void
    {
        // truncate barang_keluars dulu
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('barang_keluars')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $gudangs = DB::table('gudangs')->get();
        $data = [];

        foreach ($gudangs as $item) {
            $jumlah_keluar = rand(5, min(80, (int)$item->stock ?: 80));

            $data[] = [
                'kode_produksi'  => $item->kode_produksi,
                'jumlah_keluar'  => $jumlah_keluar,
                'tanggal_keluar' => now()->subDays(rand(0, 7))->format('Y-m-d'),
                'tujuan'         => 'Distributor ' . rand(1, 5),
                'keterangan'     => 'Pengiriman cabang ' . rand(1, 5),
                'created_at'     => now(),
                'updated_at'     => now(),
            ];
        }

        DB::table('barang_keluars')->insert($data);
    }
}
