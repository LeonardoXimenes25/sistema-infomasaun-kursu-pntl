<?php

namespace Database\Seeders;

use App\Models\TipuKursu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipuKursuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipuKursu::create(
            [
                'kodigu'=>'FT001',
                'naran'=>'Investigasaun',
            ],
            );
        TipuKursu::create(
            [
                'kodigu'=>'FT002',
                'naran'=>'Administrasaun',
            ],
            );
        TipuKursu::create(
            [
                'kodigu'=>'FT003',
                'naran'=>'Ordem Publika',
            ],
            );
    }
}
