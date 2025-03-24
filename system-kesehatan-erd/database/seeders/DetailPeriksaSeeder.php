<?php
// app\Database\Seeders\DetailPeriksaSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetailPeriksa;
use App\Models\Obat;

class DetailPeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pemeriksaan 1 (Budi Santoso dengan Dr. Ahmad Santoso)
        DetailPeriksa::create([
            'id_periksa' => 1,
            'id_obat' => 1, // Paracetamol
        ]);

        DetailPeriksa::create([
            'id_periksa' => 1,
            'id_obat' => 3, // Ibuprofen
        ]);

        // Pemeriksaan 2 (Ani Lestari dengan Dr. Siti Rahmah)
        DetailPeriksa::create([
            'id_periksa' => 2,
            'id_obat' => 4, // Cetirizine
        ]);

        // Pemeriksaan 3 (Budi Santoso dengan Dr. Siti Rahmah)
        DetailPeriksa::create([
            'id_periksa' => 3,
            'id_obat' => 1, // Paracetamol
        ]);
    }
}
