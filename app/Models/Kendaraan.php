<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = "kendaraan";
    protected $primaryKey = 'id';
    protected $fillable = ['nama_kendaraan', 'warna', 'plat', 'konsumsi_bbm', 'jadwal_service'];

    public function kendaraan()
    {
        return $this->hasMany(Pesanan::class, 'id_kendaraan');
    }
}