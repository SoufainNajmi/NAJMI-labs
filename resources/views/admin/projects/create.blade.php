@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto space-y-6">
    <div>
        <a href="{{ route('admin.projects.index') }}" class="text-slate-500 hover:text-slate-800 dark:hover:text-white text-sm flex items-center gap-1 mb-2">&larr; Back to projects</a>
        <h1 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white">Add New Project</h1>
    </div>

    <!-- Form Card -->
    <div class="glass p-6 rounded-2xl">
        <form action="{{ route('admin.projects.store') }}" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label for="title" class="block text-sm font-medium text-slate-500 mb-1">Title</label>
                <input type="text" name="title" id="title" required value="{{ old('title') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary text-slate-900 dark:text-white">
                @error('title') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="technologies" class="block text-sm font-medium text-slate-500 mb-1">Technologies (comma separated)</label>
                <input type="text" name="technologies" id="technologies" value="{{ old('technologies') }}" placeholder="e.g. Laravel, React, Tailwind, PHP" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary text-slate-900 dark:text-white">
                @error('technologies') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="github_link" class="block text-sm font-medium text-slate-500 mb-1">GitHub Link</label>
                <input type="url" name="github_link" id="github_link" value="{{ old('github_link') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary text-slate-900 dark:text-white">
                @error('github_link') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="live_demo" class="block text-sm font-medium text-slate-500 mb-1">Live Demo Link</label>
                <input type="url" name="live_demo" id="live_demo" value="{{ old('live_demo') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary text-slate-900 dark:text-white">
                @error('live_demo') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-slate-500 mb-1">Short Description</label>
                <textarea name="description" id="description" required rows="3" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary text-slate-900 dark:text-white font-sans">{{ old('description') }}</textarea>
                @error('description') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="case_study" class="block text-sm font-medium text-slate-500 mb-1">Detailed Case Study (optional)</label>
                <textarea name="case_study" id="case_study" rows="8" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary text-slate-900 dark:text-white font-sans">{{ old('case_study') }}</textarea>
                @error('case_study') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="pt-4 flex justify-end gap-3">
                <a href="{{ route('admin.projects.index') }}" class="px-4 py-2 bg-slate-100 hover:bg-slate-250 dark:bg-slate-800 dark:hover:bg-slate-700 rounded-xl text-sm font-medium transition-all">Cancel</a>
                <button type="submit" class="btn-primary">Add Project</button>
            </div>
        </form>
    </div>
</div>
@endsection
