<?php
// app\Database\Seeders\UserSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Dokter
       User::create([
        'nama' => 'Dr. Ahmad Santoso',
        'alamat' => 'Jl. Sehat No. 1, Jakarta',
        'no_hp' => '081234567890',
        'email' => 'ahmad.santoso@dokter.com',
        'role' => 'dokter',
        'password' => Hash::make('password123'),
        ]);

        User::create([
            'nama' => 'Dr. Siti Rahmah',
            'alamat' => 'Jl. Damai No. 5, Bandung',
            'no_hp' => '081234567891',
            'email' => 'siti.rahmah@dokter.com',
            'role' => 'dokter',
            'password' => Hash::make('password123'),
        ]);

        // Pasien
        User::create([
            'nama' => 'Budi Santoso',
            'alamat' => 'Jl. Makmur No. 10, Surabaya',
            'no_hp' => '081234567892',
            'email' => 'budi.santoso@pasien.com',
            'role' => 'pasien',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'nama' => 'Ani Lestari',
            'alamat' => 'Jl. Bahagia No. 15, Yogyakarta',
            'no_hp' => '081234567893',
            'email' => 'ani.lestari@pasien.com',
            'role' => 'pasien',
            'password' => Hash::make('password123'),
        ]);
    }
}
