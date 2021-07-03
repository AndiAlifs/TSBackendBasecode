<?php

namespace Database\Seeders;

use App\Models\kasus_covid;
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
        $newKasus = new kasus_covid();
        $newKasus->jumlahKasus = 20;
        $newKasus->id_lokasi = 1;
        $newKasus->last_update = Carbon::yesterday()->toDateString();
        $newKasus->save();

        $newKasus = new kasus_covid();
        $newKasus->jumlahKasus = 24;
        $newKasus->id_lokasi = 1;
        $newKasus->last_update = Carbon::now()->toDateString();
        $newKasus->save();
    }
}
