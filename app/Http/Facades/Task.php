<?php

namespace App\Http\Facades;

use App\Http\Services\TaskService;
use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed createTasks()
 * @method static mixed getPlan()
 */
class Task extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return TaskService::class;
    }
}
