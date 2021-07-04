<?php

namespace Database\Seeders;

use App\Models\Penginapan;
use App\Models\Photo;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 4; $i++) { 
            $newPhoto = new Photo;
            $newPhoto->photo = 'images/penginapan/'.$i.'.jpg';
            $newPhoto->save();
        }
        
        $allPenginapan = Penginapan::get();
        foreach ($allPenginapan as $penginapan) {
            $allPhotos = Photo::get();
            foreach ($allPhotos as $photo) {
                $penginapan->photos()->attach($photo);
            }
        }
    }
}
