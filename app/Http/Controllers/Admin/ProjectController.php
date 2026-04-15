<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'tags' => 'nullable|string|max:255',
            'challenge' => 'nullable|string',
            'solution' => 'nullable|string',
            'result' => 'nullable|string',
            'github_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('projects', 'public');
            $validated['image'] = $path;
        }

        Project::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Projet créé avec succès !');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'tags' => 'nullable|string|max:255',
            'challenge' => 'nullable|string',
            'solution' => 'nullable|string',
            'result' => 'nullable|string',
            'github_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $path = $request->file('image')->store('projects', 'public');
            $validated['image'] = $path;
        }

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Projet mis à jour !');
    }

    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Projet supprimé.');
    }
}
