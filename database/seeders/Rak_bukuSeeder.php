<?php

namespace Database\Seeders;

use App\Models\Rak_buku;
use Illuminate\Database\Seeder;

class Rak_bukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rb1 = new Rak_buku();
        $rb1->id_buku = "2";
        $rb1->id_jenis_buku= "1";
        $rb1->save();

        $rb2 = new Rak_buku();
        $rb2->id_buku = "1";
        $rb2->id_jenis_buku= "2";
        $rb2->save();
    }
}
