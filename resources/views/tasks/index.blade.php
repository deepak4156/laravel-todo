@extends('layouts.app')
@section('content')
    <h1>Tasks</h1>
    <ul>
        @foreach($tasks as $task)
        <div class="card" style="width: 18rem; margin-top: 5px;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">{{$task->description}}</li>
              <a class="btn btn-secondary">Complete</a>
            </ul>
          </div>
        @endforeach
    </ul>
    <a href="/tasks/create" class="btn btn-primary btn-lg">New Task</a>

@endsection