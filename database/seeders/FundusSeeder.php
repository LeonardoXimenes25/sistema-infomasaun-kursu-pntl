<?php

namespace Database\Seeders;

use App\Models\Fundus;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FundusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Fundus::create(
            [
                'kodigu'=>'FD001',
                'naran'=>'UNDP',
            ],
            );
        Fundus::create(
            [
                'kodigu'=>'FD002',
                'naran'=>'TLPDP',
            ],
            );
        Fundus::create(
            [
                'kodigu'=>'FD003',
                'naran'=>'GOV-PNTL',
            ],
            );
    }
}
