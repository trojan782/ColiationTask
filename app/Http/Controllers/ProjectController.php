<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\DemoRequest;
use App\Http\Requests\TaskRequest;
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

    public function tasks( $projectId ) {
        $project = Project::find($projectId);
        $tasks = Task::where('projectId', $projectId)->get();
        // dd($tasks);
        // $tasks = Task::where('projectId', $project_id)->get();
        // dd($tasks);
        return view('viewTasks', ['tasks' => $tasks]);
    }
}


