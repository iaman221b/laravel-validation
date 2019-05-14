<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project ;
use App\Task;

class projectsController extends Controller
{
    public function index(){
         $projects = Project::with('tasks')->get();
        //   return $projects;
         return view('projects.index1', compact('projects')); 
       
    }

    public function showForm(){
        return view('projects.create');
        
    }

public function show($projectId){
        $project = Project::with('tasks')->withCount('tasks')->find($projectId);
        $tasks = Task::all();
        // // $project = Project::find($id);
        // // return $project;
    //    $tasks=  $project->load('tasks');
        // return $project;
        return view('projects.show' , ['project'=>$project,'tasks'=>$tasks]);
    }

    public function edit(Project $project){
        // $project = Project::findOrFail($id);


        return view('projects.edit' , compact('project'));

    }

    public function update(Project $project){
        // $project = Project::findOrFail($id);
        $project->update(request(['title' , 'Description']));


        // $project->title=request('title');
        // $project->Description=request('Description');
        // $project->save();
        return redirect('/projects');


    }

    public function destroy(Project $project){

        // dd('delete ' . $id);
        //   Project::findOrFail($id)->delete();
        $project->delete();
        return redirect('/projects');

    }

    public function store()
    {
        // return request()->all();
        // dd(request(['title' , 'Description']));

        $attributes = request()->validate([
            'title' => ['required', 'min:3' , 'max:255'] ,
            'Description' => ['required', 'min:3' , 'max:255'] 
        ]);

        // return[
        // project::create([
        //     'title'=>request('title'),
        //     'Description'=>request('Description')
        // ])
        // ];

    
            project::create($attributes);
            return redirect('/projects');
            
    

        


        // $project = new Project();
        // $project->title=request('title');
        // $project->Description=request('Description');
        // $project->save();
        // return redirect('/projects');

    }
    

}

