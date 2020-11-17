<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    //
    public function index(){
        $task = Task::orderBy('id', 'desc')->paginate(8);

        return view('/welcome', ['tasks'=> $task]);
    }

    public function updateStatus($id)
    {   
        $task= Task::find($id);
        if($task->status == 0){
            $task->status =1;
            $task->save();
        }
        else{
            $task->status =0;
            $task->save();
        }
        return redirect()->route('task');
    }

    public function editTask($id)
    {
        $task= Task::find($id);
        return view('editTask', ['task'=> $task]);
    }

    public function editTaskDone(Request $request, $id)
    {
        $task= Task::find($id);
        //$request->flash();
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:255',
        ]);
        $task->name = $request->input('name');
        $task->save();
        return redirect('/task');
    }

    public function delete($id){
        $task = Task::find($id);
        $task->delete();
        return redirect('/task');
    }

    public function addTask(Request $request){
        $task = new Task();
        $task->name = $request->input('name');
        $task->status = 0;
        $task->save();
        return redirect('/task');
    }

}
