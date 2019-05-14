<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title' , 'Description'
    ];

    public function tasks(){
        return $this->hasMany(Task::class);
    }
    // protected $guarded = [];

    public function addTask($task){
        // return  Task::create([
        //     'project_id' => $this->id,
        //     'description' => request('description')

        $this->tasks()->create($task);
        // ]);
    }
}
