<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
    public function index()
    {
        //To get all the projects of the user
        $projects = Project::where('user_id', Auth::id())->get();

        return view('dashboard', ['projects' => $projects]);
    }

    public function add() {
        return view('newProject');
    }

    public function create(ProjectRequest $request) {
        $project = new Project();
        $project->title = $request->title;
        $project->user_id = Auth::id();
        $project->description = $request->description;
        $project->task = $request->task;
        $project->save();
        return redirect()->back();
    }

    public function tasks(Request $request, Project $project) {
        $tasks = Task::where('projectId', $project->id)->get();
        // $tasks = Task::all();
        return view('viewTasks', ['tasks' => $tasks]);
    }
}


