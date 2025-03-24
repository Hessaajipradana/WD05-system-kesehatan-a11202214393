<?php
// app\Database\Seeders\ObatSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Obat;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Obat::create([
            'nama_obat' => 'Paracetamol',
            'kemasan' => 'Strip isi 10 tablet',
            'harga' => 5000,
        ]);

        Obat::create([
            'nama_obat' => 'Amoxicillin',
            'kemasan' => 'Strip isi 10 kapsul',
            'harga' => 15000,
        ]);

        Obat::create([
            'nama_obat' => 'Ibuprofen',
            'kemasan' => 'Strip isi 10 tablet',
            'harga' => 8000,
        ]);

        Obat::create([
            'nama_obat' => 'Cetirizine',
            'kemasan' => 'Strip isi 10 tablet',
            'harga' => 7000,
        ]);
    }
}
