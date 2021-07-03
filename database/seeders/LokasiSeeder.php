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

        $newLokasi = new lokasi();
        $newLokasi->lokasi = 'Rawa Aopa';
        $newLokasi->save();

        $newLokasi = new lokasi();
        $newLokasi->lokasi = 'Cibubur';
        $newLokasi->save();

        $newLokasi = new lokasi();
        $newLokasi->lokasi = 'Cihampelas';
        $newLokasi->save();

        $newLokasi = new lokasi();
        $newLokasi->lokasi = 'Grogol';
        $newLokasi->save();

        $newLokasi = new lokasi();
        $newLokasi->lokasi = 'Cilandak';
        $newLokasi->save();

        $newLokasi = new lokasi();
        $newLokasi->lokasi = 'Kebon Jeruk';
        $newLokasi->save();
    }
}
