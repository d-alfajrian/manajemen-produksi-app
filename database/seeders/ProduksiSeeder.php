<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProduksiSeeder extends Seeder
{
    public function run(): void
    {
        // Non-aktifkan foreign key checks agar truncate aman
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('produksis')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $data = [];
        for ($i = 1; $i <= 20; $i++) {
            $data[] = [
                'kode_produksi'    => 'PRD-' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'nama_barang'      => 'Ban Motor ' . $i,
                'jumlah'           => rand(100, 500),
                'tanggal_produksi' => Carbon::now()->subDays(rand(1, 30))->format('Y-m-d'),
                'keterangan'       => 'Batch ' . $i,
                'created_at'       => now(),
                'updated_at'       => now(),
            ];
        }

        DB::table('produksis')->insert($data);
    }
}
