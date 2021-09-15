<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = "pesanan";
    protected $primaryKey = 'id';
    protected $fillable = ['tanggal_pesan', 'tanggal_kembali', 'nama_pemesan', 'id_driver', 'pengawas_kendaraan', 'admin_kendaraan'];

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'id_driver');
    }
    
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'id_kendaraan');
    }
}