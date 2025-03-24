<?php
// app/Models/User.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['nama', 'alamat', 'no_hp', 'email', 'role', 'password'];

    public function pemeriksaanSebagaiPasien()
    {
        return $this->hasMany(Periksa::class, 'id_pasien');
    }

    public function pemeriksaanSebagaiDokter()
    {
        return $this->hasMany(Periksa::class, 'id_dokter');
    }
}
