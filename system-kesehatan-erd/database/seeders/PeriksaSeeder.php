<?php
// app\Database\Seeders\PeriksaSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Periksa;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Periksa::create([
            'id_pasien' => 3, // Budi Santoso (pasien)
            'id_dokter' => 1, // Dr. Ahmad Santoso (dokter)
            'tgl_periksa' => '2025-03-24 09:00:00',
            'catatan' => 'Pasien mengalami demam ringan, disarankan istirahat dan minum obat.',
            'biaya_periksa' => 100000,
        ]);

        Periksa::create([
            'id_pasien' => 4, // Ani Lestari (pasien)
            'id_dokter' => 2, // Dr. Siti Rahmah (dokter)
            'tgl_periksa' => '2025-03-24 10:30:00',
            'catatan' => 'Pasien mengalami alergi ringan, diberikan obat antihistamin.',
            'biaya_periksa' => 120000,
        ]);

        Periksa::create([
            'id_pasien' => 3, // Budi Santoso (pasien)
            'id_dokter' => 2, // Dr. Siti Rahmah (dokter)
            'tgl_periksa' => '2025-03-25 14:00:00',
            'catatan' => 'Kontrol setelah demam, kondisi membaik.',
            'biaya_periksa' => 80000,
        ]);
    }
}
