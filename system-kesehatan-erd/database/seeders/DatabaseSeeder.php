<?php
// app\Database\Seeders\DatabaseSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Obat;
use App\Models\Periksa;
use App\Models\DetailPeriksa;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Panggil semua seeder dalam urutan yang telah ditentukan
        $this->call([
            UserSeeder::class,
            ObatSeeder::class,
            PeriksaSeeder::class,
            DetailPeriksaSeeder::class,
        ]);
    }
}
