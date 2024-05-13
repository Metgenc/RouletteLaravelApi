<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skor;

class SkorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skor::create(['email' => 'mtngenc52@gmail.com', 'skor' => 400]);
        Skor::create(['email' => 'mtngenc52@gmail.com', 'skor' => 6000]);
        Skor::create(['email' => 'mtngenc52@gmail.com', 'skor' => 800]);
        Skor::create(['email' => 'atilla@gmail.com', 'skor' => 300]);
        Skor::create(['email' => 'atilla@gmail.com', 'skor' => 500]);
        Skor::create(['email' => 'atilla@gmail.com', 'skor' => 500]);
        Skor::create(['email' => 'atilla@gmail.com', 'skor' => 1500]);
        Skor::create(['email' => 'atilla@gmail.com', 'skor' => 45000]);
        Skor::create(['email' => 'aleyna@gmail.com', 'skor' => 2000]);
        Skor::create(['email' => 'aleyna@gmail.com', 'skor' => 200]);
        Skor::create(['email' => 'aleyna@gmail.com', 'skor' => 100]);
        Skor::create(['email' => 'aleyna@gmail.com', 'skor' => 300]);
        Skor::create(['email' => 'aleyna@gmail.com', 'skor' => 400]);

    }
}
