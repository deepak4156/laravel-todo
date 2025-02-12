<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $task = new Task();
        $tasks = $task->orderBy('completed_at', 'asc') // Completed tasks go down
            ->orderBy('id', 'desc') // Newer tasks appear first
            ->get();

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
        if ($task->save()) {
            return redirect('/tasks');
        }
        return redirect('/tasks/create');

    }

    public function update($id)
    {
        $task = Task::find($id);
        $task->completed_at = now();
        if ($task->save()) {
            return redirect('/tasks');
        }


    }

    public function delete($id){
        $task = Task::find($id);
        
    }
}
