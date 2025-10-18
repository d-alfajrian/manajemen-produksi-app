<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gudang;

class GudangSeeder extends Seeder
{
    public function run(): void
    {
        // Generate 30 data gudang
        Gudang::factory()->count(30)->create();
    }
}
