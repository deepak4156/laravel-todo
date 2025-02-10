<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $task = new Task();
        $tasks = $task->all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
        $task = new Task();
        $task->description = request('description');
        if($task->save()){
            return redirect('/tasks');
        }
        return redirect('/tasks/create');

    }
}
