@extends('layouts.app');
@section('content')
<h1>New Task</h1>
<form action="{{Route('store.data')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="description">Task Description</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Create Task</button>
    </div>
</form>
@endsection
