@extends('layouts.public')

@section('title', 'My Portfolio & Projects')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h1 class="text-4xl mx-auto md:text-5xl font-bold tracking-tight text-slate-900 dark:text-white mb-6">
            Creative <span class="text-primary">Work</span>
        </h1>
        <p class="text-xl text-slate-600 dark:text-slate-400">
            A collection of my best projects, from SaaS applications and APIs to advanced n8n automations.
        </p>
    </div>

    <!-- Projects Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        @foreach($projects as $project)
        <div class="glass rounded-3xl overflow-hidden group flex flex-col hover:shadow-2xl hover:shadow-primary/10 transition-all duration-300">
            <!-- Project Image -->
            <a href="{{ route('projects.show', $project->slug) }}" class="block aspect-[16/9] bg-slate-200 dark:bg-slate-800 relative overflow-hidden">
                @if($project->image)
                    <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                @else
                    <div class="absolute inset-0 bg-gradient-to-tr from-accent/20 to-primary/20 mix-blend-overlay"></div>
                    <div class="w-full h-full flex items-center justify-center text-slate-400">
                        <svg class="w-20 h-20 opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                @endif
            </a>
            
            <!-- Project Info bg-[#0f172a] -->
            <div class="p-8 flex-1 flex flex-col bg-white/50 dark:bg-slate-900/50 backdrop-blur">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-primary transition-colors">
                    <a href="{{ route('projects.show', $project->slug) }}">{{ $project->title }}</a>
                </h2>
                
                <p class="text-slate-600 dark:text-slate-400 mb-6 flex-1 text-lg leading-relaxed">
                    {{ $project->description }}
                </p>
                
                <div class="mb-6 flex flex-wrap gap-2">
                    @foreach($project->technologies as $tech)
                        <span class="px-3 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-sm font-medium text-slate-700 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                            {{ $tech }}
                        </span>
                    @endforeach
                </div>
                
                <div class="flex items-center gap-4 pt-6 border-t border-slate-200 dark:border-slate-700/50">
                    <a href="{{ route('projects.show', $project->slug) }}" class="btn-primary flex-1 text-center">Case Study</a>
                    
                    @if($project->github_link)
                    <a href="{{ $project->github_link }}" target="_blank" class="p-2 border-2 border-slate-200 dark:border-slate-700 rounded-md text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" title="View Code">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    </a>
                    @endif
                    
                    @if($project->live_demo)
                    <a href="{{ $project->live_demo }}" target="_blank" class="p-2 border-2 border-slate-200 dark:border-slate-700 rounded-md text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" title="Live Demo">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
