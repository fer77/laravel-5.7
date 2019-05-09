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
        Project::create(request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'max:50']
        ]));
        // dd($validated);
        // Project::create($validated);
        return redirect('/projects');
        // return request()->all();
    }
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }
    public function update(Project $project)
    {
        // dd(request()->all());
        $project->update(request(['title', 'description']));
        return redirect('/projects');
    }
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }
}
