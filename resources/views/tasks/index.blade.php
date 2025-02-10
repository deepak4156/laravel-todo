@extends('layouts.app')
@section('content')
    <h1>Tasks</h1>
    <ul>
        @foreach ($tasks as $task)
            <div class="card" style=" margin-bottom: 20px; @if ($task->isCompleted()) border:2px solid green; @endif">
                <div class="card-body">
                    <p>{{ $task->description }}</p>
                    <form action="/tasks/{{ $task->id }}" method="POST" class="card-item">
                        @csrf
                        @method('PATCH')
                        @if (!$task->isCompleted())
                            <button class="btn btn-light" type="submit">Complete</button>
                        @endif
                    </form>
                </div>
            </div>
        @endforeach
    </ul>
    <a href="/tasks/create" class="btn btn-primary btn-lg">New Task</a>
@endsection
