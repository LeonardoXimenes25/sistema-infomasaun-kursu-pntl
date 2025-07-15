<?php

namespace Database\Seeders;

use App\Models\Divisaun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisaunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Divisaun::create(
            [
                'kodigu'=>'Div001',
                'naran'=>'Ajente ',
            ],
            );
        Divisaun::create(
            [
                'kodigu'=>'Div002',
                'naran'=>'Ajente Prinsipal',
            ],
            );
        Divisaun::create(
            [
                'kodigu'=>'Div003',
                'naran'=>'Chefe Ajente',
            ],
            );
    }
}
