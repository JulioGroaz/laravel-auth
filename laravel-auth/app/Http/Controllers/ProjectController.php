<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('portfolio.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|unique:projects|min:3',
            'description' => 'required|min:3',
            'url' => 'required|url|unique:projects',
            'image' => 'nullable|url',
            'technologies' => 'required|min:3',
        ]);

        $newProject = new Project($data);
        $newProject->title = $data['title'];
        $newProject->description = $data['description'];
        $newProject->url = $data['url'];
        $newProject->image = $data['image'];
        $newProject->technologies = $data['technologies'];
        $newProject->save();

        return redirect()->route('portfolio.show', $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('portfolio.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('portfolio.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'required|min:3|unique:projects,title,' . $project->id,
            'description' => 'required|min:3',
            'url' => 'required|url|unique:projects,url,' . $project->id,
            'image' => 'nullable|url',
            'technologies' => 'required|min:3',
        ]);

        $project->update($data);

        return redirect()->route('portfolio.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('portfolio.index');
    }
}


