<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use App\Models\Penginapan;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $newFasilitas = new Fasilitas;
        $newFasilitas->nama_fasilitas = 'Desinfektan Kamar';
        $newFasilitas->save();

        $newFasilitas = new Fasilitas;
        $newFasilitas->nama_fasilitas = 'Free Masker Medis';
        $newFasilitas->save();

        $newFasilitas = new Fasilitas;
        $newFasilitas->nama_fasilitas = 'Free Hand Sanitizer';
        $newFasilitas->save();

        $newFasilitas = new Fasilitas;
        $newFasilitas->nama_fasilitas = 'Kolam Renang';
        $newFasilitas->save();

        $newFasilitas = new Fasilitas;
        $newFasilitas->nama_fasilitas = 'Free Wifi';
        $newFasilitas->save();

        $allPenginapan = Penginapan::get();
        foreach ($allPenginapan as $penginapan) {
            $allfasilitas = fasilitas::get();
            foreach ($allfasilitas as $fasilitas) {
                $penginapan->fasilitas()->attach($fasilitas);
            }
        }

    }
}
