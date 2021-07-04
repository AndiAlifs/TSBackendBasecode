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
        $newPenginapan->deskripsi_penginapan = 'Hotel jaya wijaya adalah hotel yang terletak di kota Jakarta yang memiliki fasilitas yang sangat nyaman dan aman untuk kegiatan staycation';
        $newPenginapan->rating = rand(39,50) / 10.0;
        $newPenginapan->harga = rand(10,40) * rand(5,10) * 5000;
        $newPenginapan->save();

        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Apartemen';
        $newPenginapan->nama_penginapan = 'Sunda Kelapa';
        $newPenginapan->id_lokasi = rand(1,lokasi::count());
        $newPenginapan->deskripsi_penginapan = 'Apartemen Sunda Kelapa menawarkan unit yang dikelilingi oleh lokasi strategis sehingga tidak akan bosen selama menjalani stay';
        $newPenginapan->rating = rand(39,50) / 10.0;
        $newPenginapan->harga = rand(10,40) * rand(5,10) * 5000;
        $newPenginapan->save();

        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Apartemen';
        $newPenginapan->nama_penginapan = 'Blok M';
        $newPenginapan->id_lokasi = rand(1,lokasi::count());
        $newPenginapan->deskripsi_penginapan = 'Blok M, kawasan yang unik dan indah dan memiliki atraksi yang sangat menarik. Sangat cocok untuk kegiatan staycation';
        $newPenginapan->rating = rand(39,50) / 10.0;
        $newPenginapan->harga = rand(10,40) * rand(5,10) * 5000;
        $newPenginapan->save();

        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Wisma';
        $newPenginapan->nama_penginapan = 'Wisma Atlet';
        $newPenginapan->id_lokasi = rand(1,lokasi::count());
        $newPenginapan->deskripsi_penginapan = 'Wisma yang sangat menjunjung tinggi kesehatan sehingga tamu tidak akan khawatir';
        $newPenginapan->rating = rand(39,50) / 10.0;
        $newPenginapan->harga = rand(10,40) * rand(5,10) * 5000;
        $newPenginapan->save();

        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Hotel';
        $newPenginapan->nama_penginapan = 'La Boheme';
        $newPenginapan->id_lokasi = rand(1,lokasi::count());
        $newPenginapan->deskripsi_penginapan = 'Hotel Bergaya perancis yang sangat mewah dan cocok untuk pengalaman unik selama stay di hotel';
        $newPenginapan->rating = rand(39,50) / 10.0;
        $newPenginapan->harga = rand(10,40) * rand(5,10) * 5000;
        $newPenginapan->save();

        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Wisma';
        $newPenginapan->nama_penginapan = 'Rumanami';
        $newPenginapan->id_lokasi = rand(1,lokasi::count());
        $newPenginapan->deskripsi_penginapan = 'Wisma sederhana dengan konsep tradisional untuk pengalaman di desa';
        $newPenginapan->rating = rand(39,50) / 10.0;
        $newPenginapan->harga = rand(10,40) * rand(5,10) * 5000;
        $newPenginapan->save();

        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Hotel';
        $newPenginapan->nama_penginapan = 'All Nite and Day';
        $newPenginapan->id_lokasi = rand(1,lokasi::count());
        $newPenginapan->deskripsi_penginapan = 'Hotel yang memanjakan tamu dengan fasilitas yang sangat nyaman';
        $newPenginapan->rating = rand(39,50) / 10.0;
        $newPenginapan->harga = rand(10,40) * rand(5,10) * 5000;
        $newPenginapan->save();

        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Hotel';
        $newPenginapan->nama_penginapan = 'Claro';
        $newPenginapan->id_lokasi = rand(1,lokasi::count());
        $newPenginapan->deskripsi_penginapan = 'Hotel mewah di tenagh kota dengan fasilitas yang sangat memanjakan tamu';
        $newPenginapan->rating = rand(39,50) / 10.0;
        $newPenginapan->harga = rand(10,40) * rand(5,10) * 5000;
        $newPenginapan->save();

        $newPenginapan = new Penginapan;
        $newPenginapan->jenis_penginapan = 'Hotel';
        $newPenginapan->nama_penginapan = 'Posto Domire';
        $newPenginapan->id_lokasi = rand(1,lokasi::count());
        $newPenginapan->deskripsi_penginapan = 'Hotel dengan kuliner dan fasilitas yang sangat menarik bagi tamu yang ingin menjalankan kegiatan staycation';
        $newPenginapan->rating = rand(39,50) / 10.0;
        $newPenginapan->harga = rand(10,40) * rand(5,10) * 5000;
        $newPenginapan->save();

    }
}
