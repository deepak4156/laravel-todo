@extends('layouts.app')
@section('content')
    <h1>Tasks</h1>
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task->description }}</li>
        @endforeach
    </ul>
    <a href="/tasks/create" class="btn btn-primary">New Task</a>

@endsection