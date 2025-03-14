<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rayon;

class RayonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rayon::create(['rayon' => 'Tajur']);
        Rayon::create(['rayon' => 'Cibedug']);
        Rayon::create(['rayon' => 'Sukasari']);
        Rayon::create(['rayon' => 'Cisarua']);
    }
}
