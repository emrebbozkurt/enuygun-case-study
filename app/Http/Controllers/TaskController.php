<?php

namespace App\Http\Controllers;

use App\Http\Facades\Task;
use App\Models\Developer;

class TaskController extends Controller
{
    public function index()
    {
        $devs = Developer::all();
        $tasks = Task::getPlan();
        return view('index', ['devs' => $devs, 'tasks' => $tasks]);
    }
}
