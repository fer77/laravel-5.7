@extends('layout')
@section('content')
<h1>Welcome {{ $name }}</h1>
    <ul>
        @foreach($tasks as $task)
        <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection