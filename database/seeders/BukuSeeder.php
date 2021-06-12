<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku1 = new Buku();
        $buku1->id_buku = "1";
        $buku1->judul = "Daskomputasi";
        $buku1->tahun_terbit = "2021";
        $buku1->save();

        $buku2 = new Buku();
        $buku2->id_buku = "2";
        $buku2->judul = "Daskom Colony";
        $buku2->tahun_terbit = "2021";
        $buku2->save();
    }
}
