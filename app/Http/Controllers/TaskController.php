<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Http\Requests\updateRequest;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

     public function addTask()
    {
        //To get all the projects of the user
        $projects = Project::where('user_id', Auth::id())->get();
        return view('newTask', ['projects' => $projects]);
    }

    //createing a new task
    public function createTask(TaskRequest $request) {
        $task = new Task();
        //to get the maximum position of the tasks and increase it by 1
        $position = Task::where('projectId', $request->projectId)->max('position') + 1;
        $task->task = $request->task;
        $task->projectId = $request->projectId;
        $task->position = $position;
        $task->save();
        return redirect()->back();
    }

    //updating a task
    public function update(Request $request, $id) {
        $task = Task::find($id);
        $task->update($request->all());
        return redirect()->back();
    }

    // To render the update page
    public function edit($id) {
        $task = Task::find($id);
        return view('update', ['task' => $task]);
    }

    //deleting a task
    public function destroy($id) {
        $task = Task::find($id);
        //to automatically update the position after a task is deleted
        $task->where('position', '>', $task->position)->update(['position' => \DB::raw('position - 1')]);
        $task->delete();
        return redirect()->back();
    }

}
