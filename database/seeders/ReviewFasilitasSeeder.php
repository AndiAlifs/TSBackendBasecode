<?php

namespace Database\Seeders;

use App\Models\Penginapan;
use App\Models\Review_fasilitas;
use Illuminate\Database\Seeder;

class ReviewFasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $allPenginapan = Penginapan::get();
        foreach ($allPenginapan as $penginapan) {
            $newReview = new Review_fasilitas;
            $newReview->review = 'Memiliki fasilitas yang sangat aman dan menyenangkan, cocok untuk staycation';    
            $newReview->id_penginapan = $penginapan->id_penginapan;
            $newReview->save();

            $newReview2 = new Review_fasilitas;
            $newReview2->review = 'Memiliki fasilitas kesehatan yang sangat mumpuni, lumayan aman dan no worry selama stay disini';    
            $newReview2->id_penginapan = $penginapan->id_penginapan;
            $newReview2->save();
        }
    }
}
