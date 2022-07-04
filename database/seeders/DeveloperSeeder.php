<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Developer::create([
            'name' => 'DEV1',
            'time' => 1,
            'level' => 1
        ]);
        Developer::create([
            'name' => 'DEV2',
            'time' => 1,
            'level' => 2
        ]);
        Developer::create([
            'name' => 'DEV3',
            'time' => 1,
            'level' => 3
        ]);
        Developer::create([
            'name' => 'DEV4',
            'time' => 1,
            'level' => 4
        ]);
        Developer::create([
            'name' => 'DEV5',
            'time' => 1,
            'level' => 5
        ]);
    }
}
