<?php

namespace Database\Seeders;

use App\Models\lokasi;
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
        $newPenginapan->id_lokasi = rand(1,lokasi::count());
        $newPenginapan->deskripsi_penginapan = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis autem natus exercitationem aspernatur aperiam alias voluptates, deleniti necessitatibus mollitia adipisci veniam amet, possimus blanditiis magni nesciunt itaque saepe. Ea, illo';
        $newPenginapan->save();

        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Apartemen';
        $newPenginapan->nama_penginapan = 'Sunda Kelapa';
        $newPenginapan->id_lokasi = rand(1,lokasi::count());
        $newPenginapan->deskripsi_penginapan = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis autem natus exercitationem aspernatur aperiam alias voluptates, deleniti necessitatibus mollitia adipisci veniam amet, possimus blanditiis magni nesciunt itaque saepe. Ea, illo';
        $newPenginapan->save();

        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Apartemen';
        $newPenginapan->nama_penginapan = 'Blok M';
        $newPenginapan->id_lokasi = rand(1,lokasi::count());
        $newPenginapan->deskripsi_penginapan = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis autem natus exercitationem aspernatur aperiam alias voluptates, deleniti necessitatibus mollitia adipisci veniam amet, possimus blanditiis magni nesciunt itaque saepe. Ea, illo';
        $newPenginapan->save();

        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Wisma';
        $newPenginapan->nama_penginapan = 'Wisma Atlet';
        $newPenginapan->id_lokasi = rand(1,lokasi::count());
        $newPenginapan->deskripsi_penginapan = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis autem natus exercitationem aspernatur aperiam alias voluptates, deleniti necessitatibus mollitia adipisci veniam amet, possimus blanditiis magni nesciunt itaque saepe. Ea, illo';
        $newPenginapan->save();

        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Hotel';
        $newPenginapan->nama_penginapan = 'La Boheme';
        $newPenginapan->id_lokasi = rand(1,lokasi::count());
        $newPenginapan->deskripsi_penginapan = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis autem natus exercitationem aspernatur aperiam alias voluptates, deleniti necessitatibus mollitia adipisci veniam amet, possimus blanditiis magni nesciunt itaque saepe. Ea, illo';
        $newPenginapan->save();

        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Wisma';
        $newPenginapan->nama_penginapan = 'Rumanami';
        $newPenginapan->id_lokasi = rand(1,lokasi::count());
        $newPenginapan->deskripsi_penginapan = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis autem natus exercitationem aspernatur aperiam alias voluptates, deleniti necessitatibus mollitia adipisci veniam amet, possimus blanditiis magni nesciunt itaque saepe. Ea, illo';
        $newPenginapan->save();

        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Hotel';
        $newPenginapan->nama_penginapan = 'All Nite and Day';
        $newPenginapan->id_lokasi = rand(1,lokasi::count());
        $newPenginapan->deskripsi_penginapan = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis autem natus exercitationem aspernatur aperiam alias voluptates, deleniti necessitatibus mollitia adipisci veniam amet, possimus blanditiis magni nesciunt itaque saepe. Ea, illo';
        $newPenginapan->save();

        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Hotel';
        $newPenginapan->nama_penginapan = 'Claro';
        $newPenginapan->id_lokasi = rand(1,lokasi::count());
        $newPenginapan->deskripsi_penginapan = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis autem natus exercitationem aspernatur aperiam alias voluptates, deleniti necessitatibus mollitia adipisci veniam amet, possimus blanditiis magni nesciunt itaque saepe. Ea, illo';
        $newPenginapan->save();

        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Hotel';
        $newPenginapan->nama_penginapan = 'Posto Domire';
        $newPenginapan->id_lokasi = rand(1,lokasi::count());
        $newPenginapan->deskripsi_penginapan = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis autem natus exercitationem aspernatur aperiam alias voluptates, deleniti necessitatibus mollitia adipisci veniam amet, possimus blanditiis magni nesciunt itaque saepe. Ea, illo';
        $newPenginapan->save();
    }
}
