<?php

namespace App\Http\Livewire;

use App\Models\Task;
use App\Models\Project;
use Livewire\Component;
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TaskTable extends Component
{
    public $tasks;
    public function render()
    {
        // $task = $this->tasks;
        // $task = Task::where('projectId', $project)->orderBy('position')->get();
        $task = $this->tasks->sortBy('position');
        // $task = Task::orderBy('position')->get();
        // $task = DB::table('tasks')->orderBy('position')->get();
        return view('livewire.task-table', compact('task'));
    }

     public function addTask()
    {
        //To get all the projects of the user
        $projects = Project::where('user_id', Auth::id())->get();

        return view('newTask', ['projects' => $projects]);
    }

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


    public function destroy($id) {
        $task = Task::find($id);
        //to automatically update the position after a task is deleted
        $task->where('position', '>', $task->position)->update(['position' => \DB::raw('position - 1')]);
        $task->delete();
        return redirect()->back();
    }

    //method for larave sortable to re-order tasks
    public function updateTaskOrder($tasks) {
        foreach ($tasks as $task) {
            Task::find($task['value'])->update(['position' => $task['order']]);
        }
    }
}
