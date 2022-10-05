<link rel="stylesheet" href="{{asset('assets/css/task.css')}}">
@extends('home')
@section('content')

<div class="container">
    <div class="all-container">
        <form action="{{route('taza.task.store')}}" method="POST">
            @csrf
            <h2>Make your Task</h2>
            <div class="input-box">
                <span>Write a task</span>
                <div class="box">
                    <input type="text" name="name" id="name" required>
                </div>
            </div>
            <div class="input-box">
                <div class="box">
                    <input type="submit" value="Create a new task">
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