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
            $newReview->review = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt illo nulla assumenda eos vero impedit. ';    
            $newReview->id_penginapan = $penginapan->id_penginapan;
            $newReview->save();

            $newReview2 = new Review_fasilitas;
            $newReview2->review = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt illo nulla assumenda eos vero impedit. ';    
            $newReview2->id_penginapan = $penginapan->id_penginapan;
            $newReview2->save();
        }
    }
}
