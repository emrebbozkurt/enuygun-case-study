<?php

namespace App\Http\Services;

use App\Models\Developer;
use App\Models\Task;
use App\Models\TaskProvider;
use Illuminate\Support\Facades\Http;

class TaskService
{
    public array $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function createTasks(): void
    {
        Task::truncate();
        $providers = TaskProvider::all();

        foreach ($providers as $provider) {
            $tasks = Http::get($provider->url)->json();
            foreach ($tasks as $task) {
                $this->storeTask($task);
            }
        }
    }

    public function storeTask($task): void
    {
        if (isset($task['id'])) {
            Task::create([
                'name' => $task['id'],
                'level' => $task['zorluk'],
                'estimated_duration' => $task['sure']
            ]);
        } else if (isset(array_keys($task)[0])) {
            Task::create([
                'name' => array_keys($task)[0],
                'level' => $task[array_keys($task)[0]]['level'],
                'estimated_duration' => $task[array_keys($task)[0]]['estimated_duration']
            ]);
        }
    }

    public function getPlan(): array
    {
        $tasks = Task::all();
        $devs = Developer::all();
        $weeks = round($tasks->sum('estimated_duration') / $this->config['WORKING_HOURS']);

        $optimized_tasks = [];

        for ($week = 1; $week <= $weeks; $week++) {
            if (!empty($tasks)) {
                foreach ($devs as $dev) {
                    $worked_hours = 0;
                    foreach ($tasks as $key => $task) {
                        if ($task->level <= $dev->level
                            && $worked_hours + $task->estimated_duration <= $this->config['WORKING_HOURS']) {
                            $optimized_tasks[$week][$dev->id][] = $task->name;
                            unset($tasks[$key]);
                            $worked_hours += $task->estimated_duration;
                        }
                    }
                }
            }
        }
        return $optimized_tasks;
    }
}
