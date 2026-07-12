@extends('layouts.admin')

@section('content')
<div class="space-y-8">
    <div>
        <h1 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white mb-2">Dashboard</h1>
        <p class="text-slate-600 dark:text-slate-400">Welcome to Najmi Academy Management console.</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Card Blog -->
        <div class="glass p-6 rounded-2xl flex items-center justify-between">
            <div>
                <span class="text-sm font-medium text-slate-500">Articles</span>
                <h3 class="text-3xl font-bold text-slate-900 dark:text-white mt-1">{{ $stats['articles_count'] }}</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-blue-500/10 text-blue-500 flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
            </div>
        </div>

        <!-- Card Projects -->
        <div class="glass p-6 rounded-2xl flex items-center justify-between">
            <div>
                <span class="text-sm font-medium text-slate-500">Projects</span>
                <h3 class="text-3xl font-bold text-slate-900 dark:text-white mt-1">{{ $stats['projects_count'] }}</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-purple-500/10 text-purple-500 flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
            </div>
        </div>

        <!-- Card Videos -->
        <div class="glass p-6 rounded-2xl flex items-center justify-between">
            <div>
                <span class="text-sm font-medium text-slate-500">Videos</span>
                <h3 class="text-3xl font-bold text-slate-900 dark:text-white mt-1">{{ $stats['videos_count'] }}</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-500 flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
            </div>
        </div>

        <!-- Card Messages -->
        <div class="glass p-6 rounded-2xl flex items-center justify-between">
            <div>
                <span class="text-sm font-medium text-slate-500">Messages</span>
                <h3 class="text-3xl font-bold text-slate-900 dark:text-white mt-1">{{ $stats['messages_count'] }}</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-rose-500/10 text-rose-500 flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0a2 2 0 01-2 2H6a2 2 0 01-2-2m16 0V9a2 2 0 00-2-2H6a2 2 0 00-2 2v2m16 4h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 15H4"></path></svg>
            </div>
        </div>
    </div>

    <!-- Quick shortcuts -->
    <div class="glass p-8 rounded-2xl">
        <h2 class="text-xl font-bold text-slate-900 dark:text-white mb-6">Quick Actions</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <a href="{{ route('admin.blog.create') }}" class="p-4 rounded-xl border border-slate-200 dark:border-slate-800 hover:border-primary dark:hover:border-primary text-center block transition-all">
                <span class="font-semibold text-slate-900 dark:text-white block mb-1">Create Blog Post</span>
                <span class="text-xs text-slate-500">Publish a new article to the blog.</span>
            </a>
            <a href="{{ route('admin.projects.create') }}" class="p-4 rounded-xl border border-slate-200 dark:border-slate-800 hover:border-primary dark:hover:border-primary text-center block transition-all">
                <span class="font-semibold text-slate-900 dark:text-white block mb-1">Add Project</span>
                <span class="text-xs text-slate-500">Showcase a new coding project.</span>
            </a>
            <a href="{{ route('admin.videos.create') }}" class="p-4 rounded-xl border border-slate-200 dark:border-slate-800 hover:border-primary dark:hover:border-primary text-center block transition-all">
                <span class="font-semibold text-slate-900 dark:text-white block mb-1">Upload Video</span>
                <span class="text-xs text-slate-500">Add a new tutorial video link.</span>
            </a>
        </div>
    </div>
</div>
@endsection
