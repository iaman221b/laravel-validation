<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;

use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function update(Task $task){
        // dd($task); 
        // dd(request()->all());
        // $task->update([
        //     'completed' => request()->has('completed')
        // ]);

        $task -> complete(request()->has('completed'));
        return back();
    }

    public function store(Project $project){
        $attributes = request()->validate([
           'description' => ['required', 'min:3' , 'max:255'] 
        ]);
   
        $project->addTask( $attributes );
            return  back();
    }

}
