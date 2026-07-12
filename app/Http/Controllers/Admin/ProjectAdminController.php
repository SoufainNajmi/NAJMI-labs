<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectAdminController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'technologies' => 'nullable|string', // Comma separated values
            'github_link' => 'nullable|url',
            'live_demo' => 'nullable|url',
            'case_study' => 'nullable|string',
        ]);

        // Convert technologies comma string to array
        $techArray = [];
        if ($request->technologies) {
            $techArray = array_map('trim', explode(',', $request->technologies));
        }

        Project::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'technologies' => $techArray,
            'github_link' => $request->github_link,
            'live_demo' => $request->live_demo,
            'case_study' => $request->case_study,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'technologies' => 'nullable|string',
            'github_link' => 'nullable|url',
            'live_demo' => 'nullable|url',
            'case_study' => 'nullable|string',
        ]);

        $techArray = [];
        if ($request->technologies) {
            $techArray = array_map('trim', explode(',', $request->technologies));
        }

        $project->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'technologies' => $techArray,
            'github_link' => $request->github_link,
            'live_demo' => $request->live_demo,
            'case_study' => $request->case_study,
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
