<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Declare the fields that are ok to mass assign here:
    protected $guarded = [];

    //$project->tasks
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    public function addTask($task)
    {
        // because Eloquent and Laravel know the relationship, based on the project instance. So there is no need to pass a "project_id"
        $this->tasks()->create($task);
    }
}
