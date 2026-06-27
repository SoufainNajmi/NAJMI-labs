@extends('layouts.public')

@section('title', $project->title)

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
    <div class="mb-10 text-center">
        <a href="{{ route('projects.index') }}" class="text-primary hover:underline font-medium text-sm inline-flex items-center gap-1 mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to Projects
        </a>
        <h1 class="text-4xl md:text-6xl font-bold tracking-tight text-slate-900 dark:text-white mb-6 leading-tight">
            {{ $project->title }}
        </h1>
        <p class="text-xl text-slate-600 dark:text-slate-400 max-w-2xl mx-auto mb-8">
            {{ $project->description }}
        </p>
        
        <!-- Live & Github links -->
        <div class="flex items-center justify-center gap-4">
            @if($project->live_demo)
                <a href="{{ $project->live_demo }}" target="_blank" class="btn-primary text-base px-6">Visit Live Site</a>
            @endif
            @if($project->github_link)
                <a href="{{ $project->github_link }}" target="_blank" class="inline-flex items-center gap-2 px-6 py-2 border-2 border-slate-200 dark:border-slate-700 rounded-md font-semibold text-base text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    Source Code
                </a>
            @endif
        </div>
    </div>

    <!-- Tech Stack Box -->
    <div class="glass p-6 rounded-2xl flex flex-wrap items-center justify-center gap-4 mb-16 max-w-2xl mx-auto">
        <span class="text-sm font-semibold text-slate-500 uppercase tracking-widest mr-4">Tech Stack</span>
        @foreach($project->technologies as $tech)
            <div class="flex items-center gap-2 bg-white dark:bg-slate-800 px-3 py-1.5 rounded text-slate-800 dark:text-slate-200 shadow-sm border border-slate-100 dark:border-slate-700 font-medium text-sm">
                {{ $tech }}
            </div>
        @endforeach
    </div>

    <!-- Hero Image -->
    <div class="w-full aspect-video bg-slate-800 rounded-3xl mb-16 overflow-hidden shadow-2xl relative border border-slate-200 dark:border-slate-700">
        @if($project->image)
            <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
        @else
            <div class="absolute inset-0 bg-gradient-to-tr from-accent/20 to-primary/20 mix-blend-overlay"></div>
            <div class="w-full h-full flex flex-col items-center justify-center text-white">
                <svg class="w-20 h-20 opacity-30 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                <span class="text-lg font-medium opacity-50">Project Screenshot Placeholder</span>
            </div>
        @endif
    </div>

    <!-- Case Study -->
    <div class="prose dark:prose-invert prose-lg max-w-none prose-a:text-primary hover:prose-a:text-primary/80 prose-headings:font-bold prose-img:rounded-2xl">
        <h2>Case Study</h2>
        {!! $project->case_study !!}
    </div>

</div>
@endsection
