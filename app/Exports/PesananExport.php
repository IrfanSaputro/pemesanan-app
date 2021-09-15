<?php

namespace App\Exports;

use App\Models\Pesanan;
use Maatwebsite\Excel\Concerns\FromCollection;

class PesananExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pesanan::where('pengawas_kendaraan', 'disetujui')
                            ->where('admin_kendaraan', 'disetujui')
                            ->get();
    }
}