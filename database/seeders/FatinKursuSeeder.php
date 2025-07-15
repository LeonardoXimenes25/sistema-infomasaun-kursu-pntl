<?php

namespace Database\Seeders;

use App\Models\FatinKursu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FatinKursuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FatinKursu::create(
            [
                'kodigu'=>'FT001',
                'naran'=>'Investigasaun',
                'kategoria_id' => 1,
            ]
            );

        FatinKursu::create(
            [
                'kodigu'=>'FT002',
                'naran'=>'Administrasaun',
                'kategoria_id' => 1,
            ]
            );
    }
}
