<?php

namespace App\Exports;

use App\Jenis_buku;
use Maatwebsite\Excel\Concerns\FromCollection;

class Jenis_bukuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Jenis_buku::all();
    }
}
