@extends('layouts.public')

@section('title', 'Tutorials Collection')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h1 class="text-4xl mx-auto md:text-5xl font-bold tracking-tight text-slate-900 dark:text-white mb-6">
            All <span class="text-primary">Tutorials</span>
        </h1>
        <p class="text-xl text-slate-600 dark:text-slate-400">
            Step-by-step guides covering everything from server configuration to advanced API development.
        </p>
    </div>

    <div class="flex flex-wrap gap-3 mb-10 justify-center">
        @php
            $tags = ['Laravel', 'n8n', 'REST APIs', 'Google Sheets API', 'Authentication', 'CRUD', 'File Upload', 'Docker', 'Linux Commands', 'Git', 'OpenAI API', 'Webhook'];
        @endphp
        
        @foreach($tags as $tag)
            <a href="#" class="px-4 py-2 rounded-full glass text-sm font-medium text-slate-700 dark:text-slate-300 hover:text-primary dark:hover:text-primary transition-colors border border-slate-200 dark:border-slate-700">
                {{ $tag }}
            </a>
        @endforeach
    </div>

    <!-- Video/Reading Tutorials Placeholder Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @for ($i = 0; $i < 6; $i++)
        <div class="glass rounded-2xl overflow-hidden group flex flex-col hover:shadow-xl transition-all duration-300">
            <div class="h-48 bg-slate-200 dark:bg-slate-800 relative overflow-hidden">
                <!-- Placeholder Image Structure -->
                <div class="absolute inset-0 bg-gradient-to-tr from-primary/80 to-accent/80 opacity-50 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <svg class="w-12 h-12 text-white/50" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                </div>
            </div>
            <div class="p-6 flex-1 flex flex-col">
                <div class="text-xs font-semibold text-primary mb-2 tracking-wider uppercase">Tutorial Category</div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 group-hover:text-primary transition-colors">How to Build a REST API with Laravel 12</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-4 line-clamp-2">Learn the best practices to build, test, and document a robust API utilizing Sanctum for Auth and API Resources.</p>
                
                <div class="mt-auto pt-4 border-t border-slate-100 dark:border-slate-700/50 flex justify-between items-center text-sm text-slate-500">
                    <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> 15 min read</span>
                    <a href="#" class="text-primary font-semibold hover:underline">Read more</a>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection
