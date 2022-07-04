<?php

use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

// Create the tasks command
Artisan::command('tasks:create', function () {
    \App\Http\Facades\Task::createTasks();
    $this->info('Created all tasks successfully.');
})->purpose('Creating all tasks from providers.');

// Create the tasks command
Artisan::command('tasks:delete', function () {
    \App\Models\Task::truncate();
    $this->info('Deleted all tasks successfully.');
})->purpose('Deleting all tasks from database.');

