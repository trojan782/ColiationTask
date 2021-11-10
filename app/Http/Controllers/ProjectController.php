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

    //to render the add task page
    public function add() {
        return view('newProject');
    }

    //to create a new project
    public function create(ProjectRequest $request) {
        $project = new Project();
        $project->title = $request->title;
        $project->user_id = Auth::id();
        $project->description = $request->description;
        $project->task = $request->task;
        $project->save();
        return redirect()->back();
    }

    //to get all the tasks for a particular project
    public function tasks( $projectId ) {
        $project = Project::find($projectId);
        $tasks = Task::where('projectId', $projectId)->get();
        return view('viewTasks', ['tasks' => $tasks]);
    }

    //deleting a project
    public function destroy($id) {
        $project = Project::find($id);
        $project->delete($id);
        return redirect()->back();
    }
}


