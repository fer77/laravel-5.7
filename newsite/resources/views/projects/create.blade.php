@extends('layout')
@section('content')
<h1>Create a new Project</h1>

<form method="POST" action="/projects">
    {{ csrf_field() }}
    <div>
        <input type="text" name="title" placeholder="Project title" value="{{ old('title') }}">
    </div>
    <div>
        <textarea name="description" placeholder="Project description">{{ old('description') }}</textarea>
    </div>
    <div>
        <button type="submit">Create Project</button>
    </div>
    @include ("errors")
</form>
@endsection