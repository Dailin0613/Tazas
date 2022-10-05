<link rel="stylesheet" href="{{asset('assets/css/task.css')}}">
@extends('home')
@section('content')

<div class="container">
    <div class="all-container">
        <form action="{{route('taza.task.update', $task)}}" method="GET">
            @csrf
            <h2>Update the task</h2>
            <div class="input-box">
                <span>Write a task</span>
                <div class="box">
                    <input type="text" name="name" id="name" value="{{$task->name}}" required>
                </div>
            </div>
            <div class="input-box">
                <div class="box">
                    <input type="submit" value="Update task">
                </div>
            </div>
            <div class="msg">
            @if (session('success'))
                <h5 class="alert alert-success">{{ (session('success')) }}</h5>
            @endif
            </div>
        </form>
    </div>
</div>

@endsection