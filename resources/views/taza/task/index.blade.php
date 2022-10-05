<link rel="stylesheet" href="{{asset('assets/css/store.css')}}">

@extends('home')
@section('content')

<!--
<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
                <a class="nav-link active" href="">New Task</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Active Tasks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Category</a>
            </li>
        </ul>
    </div>
</div>
-->
<div class="all-task">
    <div class="a-task">
        <h1>All tasks</h1>
        @foreach ($tasks as $task)
            <div class="task">
                <div class="tasks">
                    <a href="{{route('taza.task.edit', [ 'id' => $task->id ])}}">{{$task->name}}</a>
                </div>
                <form action="{{route('taza.task.destroy', $task)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <div class="tasks">
                        <button class="btn" type="submit">Delete Task</button>
                    </div>
                </form>
            </div>
        @endforeach
    </div>
</div>


@endsection
