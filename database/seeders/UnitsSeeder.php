<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Units;
use App\Models\Students;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Units::factory()
        ->has(Students::factory()->count(5))
        ->count(5)
        ->create();
    }
}
