<?php

namespace Database\Seeders;

use App\Models\TaskProvider;
use Illuminate\Database\Seeder;

class TaskProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TaskProvider::create([
            'name' => 'Provider 1',
            'url' => 'http://www.mocky.io/v2/5d47f24c330000623fa3ebfa'
        ]);
        TaskProvider::create([
            'name' => 'Provider 2',
            'url' => 'http://www.mocky.io/v2/5d47f235330000623fa3ebf7'
        ]);
    }
}
