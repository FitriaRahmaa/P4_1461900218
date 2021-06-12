<?php

namespace Database\Seeders;

use App\Models\Jenis_buku;
use Illuminate\Database\Seeder;

class Jenis_bukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jb1 = new Jenis_buku();
        $jb1->id = "1";
        $jb1->jenis_buku = "Teknologi";
        $jb1->save();

        $jb2 = new Jenis_buku();
        $jb2->id = "2";
        $jb2->jenis_buku = "Sejarah";
        $jb2->save();
    }
}
