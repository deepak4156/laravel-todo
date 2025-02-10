<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index');
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
