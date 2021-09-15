<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $table = "driver";
    protected $primaryKey = 'id';
    protected $fillable = ['nama_driver', 'tempat_lahir', 'tanggal_lahir', 'no_hp'];

    public function driver()
    {
        return $this->hasMany(Pesanan::class, 'id_driver');
    }
}