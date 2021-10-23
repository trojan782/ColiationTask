<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
    public function index()
    {
        // $projects = Auth::user()->projects();
        $projects = Project::all();

        return view('/dashboard', compact('projects'));

        // return view('dashboard', ['projects' => $projects]);
    }



    public function add() {
        return view('newProject');
    }

    public function create(ProjectRequest $request) {
        // $validator = $request->all();
        $project = new Project();
        $project->title = $request->title;
        $project->user_id = Auth::id();
        $project->description = $request->description;
        $project->task = $request->task;
        $project->save();
        // return redirect('/dashboard');
        return redirect()->back();
    }


}

// public function update(Request $request, Task $task)
//     {
//         //to check if the delete button is clicked and to delete the task
//         if(isset($_POST['delete'])) {
//             $task->delete();
//             return redirect('/dashboard');
//             //to update the task
//         } else {
//             $this->validate($request, [
//                 'description' => 'required'
//             ]);
//             $task->description = $request->description;
//             $task->save();
//             return redirect('/dashboard');
//         }
//     }
