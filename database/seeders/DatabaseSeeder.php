<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(LokasiSeeder::class);
        $this->call(PenginapanSeeder::class);
        $this->call(KasusCovidSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(FasilitasSeeder::class);
        $this->call(ReviewFasilitasSeeder::class);

    }
}
