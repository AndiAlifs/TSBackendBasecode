<?php

namespace Database\Seeders;

use App\Models\kasus_covid;
use App\Models\lokasi;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class KasusCovidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        foreach (lokasi::get() as $lokasi) {
            $newKasus = new kasus_covid();
            $newKasus->jumlahKasus = rand(1,40);
            $newKasus->id_lokasi = $lokasi->id_lokasi;
            $newKasus->last_update = Carbon::yesterday()->toDateString();
            $newKasus->save();
    
            $newKasus = new kasus_covid();
            $newKasus->jumlahKasus = rand(1,40);
            $newKasus->id_lokasi = $lokasi->id_lokasi;
            $newKasus->last_update = Carbon::now()->toDateString();
            $newKasus->save();
        }
    }
}
