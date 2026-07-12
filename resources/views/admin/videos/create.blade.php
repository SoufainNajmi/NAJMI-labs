@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto space-y-6">
    <div>
        <a href="{{ route('admin.videos.index') }}" class="text-slate-500 hover:text-slate-800 dark:hover:text-white text-sm flex items-center gap-1 mb-2">&larr; Back to videos</a>
        <h1 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white">Add Video Link</h1>
    </div>

    <!-- Form Card -->
    <div class="glass p-6 rounded-2xl">
        <form action="{{ route('admin.videos.store') }}" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label for="title" class="block text-sm font-medium text-slate-500 mb-1">Title</label>
                <input type="text" name="title" id="title" required value="{{ old('title') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary text-slate-900 dark:text-white">
                @error('title') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="filename" class="block text-sm font-medium text-slate-500 mb-1">YouTube URL or Video Filename / Embedded Link</label>
                <input type="text" name="filename" id="filename" required value="{{ old('filename') }}" placeholder="e.g. https://www.youtube.com/embed/dQw4w9WgXcQ" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary text-slate-900 dark:text-white">
                @error('filename') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-slate-500 mb-1">Short Description (optional)</label>
                <textarea name="description" id="description" rows="4" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary text-slate-900 dark:text-white font-sans">{{ old('description') }}</textarea>
                @error('description') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="pt-4 flex justify-end gap-3">
                <a href="{{ route('admin.videos.index') }}" class="px-4 py-2 bg-slate-100 hover:bg-slate-250 dark:bg-slate-800 dark:hover:bg-slate-700 rounded-xl text-sm font-medium transition-all">Cancel</a>
                <button type="submit" class="btn-primary">Add Video</button>
            </div>
        </form>
    </div>
</div>
@endsection
