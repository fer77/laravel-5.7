<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }
    public function create()
    {
        return view('projects.create');
    }
    public function store()
    {
        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('/projects');
        // return request()->all();
    }
    public function show()
    {
        //...
    }
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }
    public function update($id)
    {
        // dd(request()->all());
        $project = Project::findOrFail($id);
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/projects');
    }
    public function destroy($id)
    {
        // dd('hello!');
        Project::findOrFail($id)->delete();
        return redirect('/projects');
    }
}
