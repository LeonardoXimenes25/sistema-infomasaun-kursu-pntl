<?php

namespace Database\Seeders;

use App\Models\Departamentu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeparmentuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departamentu::create(
            [
                'kodigu'=>'DEP001',
                'naran'=>'Formasaun',
            ],
            );
        Departamentu::create(
            [
                'kodigu'=>'DEP002',
                'naran'=>'Trannzitu',
            ],
            );
        Departamentu::create(
            [
                'kodigu'=>'DEP003',
                'naran'=>'Peskiza',
            ],
            );
    }
}
