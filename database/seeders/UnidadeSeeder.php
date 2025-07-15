<?php

namespace Database\Seeders;

use App\Models\Unidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Unidade::create(
            [
                'kodigu'=>'UN001',
                'naran'=>'Espesial',
            ],
            );
        Unidade::create(
            [
                'kodigu'=>'UN002',
                'naran'=>'Kriminal',
            ],
            );
        Unidade::create(
            [
                'kodigu'=>'UN003',
                'naran'=>'Fronteira',
            ],
            );
    }
}
