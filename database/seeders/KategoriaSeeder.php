<?php

namespace Database\Seeders;

use App\Models\Kategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategoria::create(
            [
                'kodigu'=>'KT001',
                'naran'=>'Rai Laran',
            ],
            );

        Kategoria::create(
            [
                'kodigu'=>'KT002',
                'naran'=>'Rai Liur',
            ],
            );
    }
}
