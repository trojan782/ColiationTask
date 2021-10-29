<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

     public function addTask()
    {
        //To get all the projects of the user
        $projects = Project::where('user_id', Auth::id())->get();

        return view('newTask', ['projects' => $projects]);
    }

    public function createTask(TaskRequest $request) {
        $task = new Task();
        $task->task = $request->task;
        $task->projectId = $request->projectId;
        $task->save();
        return redirect()->back();
    }
}