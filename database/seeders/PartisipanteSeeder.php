<?php

namespace Database\Seeders;

use App\Models\partisipante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartisipanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        partisipante::factory()->count(10)->create();
    }
}
