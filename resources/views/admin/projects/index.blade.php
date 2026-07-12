@extends('layouts.admin')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white">Projects</h1>
            <p class="text-slate-500 text-sm mt-1">Manage, edit, or add portfolio projects.</p>
        </div>
        <a href="{{ route('admin.projects.create') }}" class="btn-primary">Add New Project</a>
    </div>

    <!-- Table Card -->
    <div class="glass rounded-2xl overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-slate-200 dark:border-slate-800 text-xs font-semibold text-slate-500 uppercase bg-slate-50/50 dark:bg-slate-900/50">
                    <th class="px-6 py-4">Title</th>
                    <th class="px-6 py-4">Technologies</th>
                    <th class="px-6 py-4">Links</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-800 text-sm">
                @forelse($projects as $project)
                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-900/50 transition-colors">
                        <td class="px-6 py-4 font-semibold text-slate-900 dark:text-white">{{ $project->title }}</td>
                        <td class="px-6 py-4">
                            @if($project->technologies)
                                <div class="flex flex-wrap gap-1">
                                    @foreach($project->technologies as $tech)
                                        <span class="inline-block px-2 py-0.5 rounded bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-xs font-medium">{{ $tech }}</span>
                                    @endforeach
                                </div>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                                @if($project->github_link)
                                    <a href="{{ $project->github_link }}" target="_blank" class="text-xs text-primary hover:underline">GitHub</a>
                                @endif
                                @if($project->live_demo)
                                    <a href="{{ $project->live_demo }}" target="_blank" class="text-xs text-emerald-500 hover:underline">Live Demo</a>
                                @endif
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right space-x-2">
                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="text-primary hover:underline font-medium">Edit</a>
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this project?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-rose-500 hover:underline font-medium">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-12 text-center text-slate-500">
                            No projects found. Create your first portfolio project!
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex justify-end">
        {{ $projects->links() }}
    </div>
</div>
@endsection
