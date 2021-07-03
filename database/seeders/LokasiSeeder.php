<?php

namespace Database\Seeders;

use App\Models\lokasi;
use Illuminate\Database\Seeder;


class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newLokasi = new lokasi();
        $newLokasi->lokasi = 'Tanah Abang';
        $newLokasi->save();
    }
}
