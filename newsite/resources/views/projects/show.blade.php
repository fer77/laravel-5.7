@extends('layout')
@section('content')
<h1>{{ $project->title }}</h1>
<div class="content">
    {{ $project->description }}
    <p>
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </p>
</div>
@if ($project->tasks->count())
<div>
    @foreach ($project->tasks as $task)
    <div>
        <form method="POST" action="/tasks/{{ $task->id }}">
            @method('PATCH')
            @csrf
            <label for="completed">
                <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                {{ $task->description }}
            </label>
        </form>
    </div>
    @endforeach
</div>
@endif
<form method="POST" action="/projects/{{ $project->id }}/tasks">
    @csrf
    <div>
        <label for="description">New Task</label>
        <div>
            <input type="text" name="description" placeholder="New Task" required>
        </div>
    </div>
    <div>
        <div>
            <button type="submit">Add Task</button>
        </div>
    </div>
</form>
@include ("errors")
@endsection