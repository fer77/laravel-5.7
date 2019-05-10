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
}
