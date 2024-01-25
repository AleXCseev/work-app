<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Position::factory(5)->create();
    }
}
