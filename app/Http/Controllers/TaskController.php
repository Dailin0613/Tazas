<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();

        return view('taza.task.index', ['tasks' => $tasks]);
    }

    public function create(){
        return view('taza.task.store');
    }
    
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:70'
        ]);

        $task = new Task();
        $task->name = $request->name;
        $task->save();

        return redirect()->route('taza.task.store')->with('success', 'The task is create');
    }


    public function show($id){
        $task = Task::find($id);

        return view('taza.task.show', ['task' => $task]);
    }

    public function update(Request $request, $id){
        $tasks = Task::find($id);
        $tasks->name = $request->name;

        $tasks->save();
        
        return redirect()->route('taza.task.index')->with('success', 'The task is currently update');
    }

    public function destroy(Task $task){
        $task->delete();
        
        return redirect()->route('taza.task.index')->with('success', 'The task is currently delete');
    }
}
