<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penginapan;

class PenginapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Hotel';
        $newPenginapan->nama_penginapan = 'Hotel Jaya Wijaya';
        $newPenginapan->id_lokasi = 1;
        $newPenginapan->deskripsi_penginapan = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis autem natus exercitationem aspernatur aperiam alias voluptates, deleniti necessitatibus mollitia adipisci veniam amet, possimus blanditiis magni nesciunt itaque saepe. Ea, illo';
        $newPenginapan->save();

        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Apartemen';
        $newPenginapan->nama_penginapan = 'Sunda Kelapa';
        $newPenginapan->id_lokasi = 1;
        $newPenginapan->deskripsi_penginapan = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis autem natus exercitationem aspernatur aperiam alias voluptates, deleniti necessitatibus mollitia adipisci veniam amet, possimus blanditiis magni nesciunt itaque saepe. Ea, illo';
        $newPenginapan->save();
    }
}
