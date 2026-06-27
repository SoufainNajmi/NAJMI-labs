@extends('layouts.public')

@section('title', 'Laravel Academy - PHP framework for Web Artisans')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h1 class="text-4xl mx-auto md:text-5xl font-bold tracking-tight text-slate-900 dark:text-white mb-6">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-700">Laravel</span> Academy
        </h1>
        <p class="text-xl text-slate-600 dark:text-slate-400">
            A comprehensive guide to modern web development using the elegant PHP framework. From basics to advanced architecture.
        </p>
    </div>

    <!-- Syllabus Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-16">
        @php
            $topics = [
                'MVC', 'Routing', 'Controllers', 'Models', 'Migration', 'Seeder', 
                'Factory', 'Middleware', 'Authentication', 'Authorization', 'Validation', 
                'Blade', 'Eloquent', 'Relationship', 'API', 'Storage', 'Queues', 
                'Mail', 'Notifications', 'Deployment', 'Best Practices'
            ];
        @endphp
        
        @foreach($topics as $topic)
        <a href="#" class="glass p-5 rounded-xl group hover:border-red-500/50 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 text-center">
            <h3 class="font-bold text-slate-800 dark:text-slate-200 group-hover:text-red-500 transition-colors">{{ $topic }}</h3>
        </a>
        @endforeach
    </div>

    <!-- Featured Tutorial Highlight -->
    <div class="glass p-8 md:p-12 rounded-3xl relative overflow-hidden bg-white/40 dark:bg-slate-900/40">
        <div class="absolute right-0 top-0 w-1/2 h-full bg-gradient-to-l from-red-500/10 to-transparent pointer-events-none"></div>
        <div class="flex flex-col md:flex-row gap-8 items-center relative z-10">
            <div class="flex-1 space-y-6">
                <span class="inline-block py-1 px-3 rounded bg-red-100 text-red-600 dark:bg-red-900/30 dark:text-red-400 text-sm font-semibold tracking-wider uppercase">Featured</span>
                <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Building Robust REST APIs</h2>
                <p class="text-lg text-slate-600 dark:text-slate-300">
                    Learn how to design, version, secure and document your REST APIs using Laravel 12. Includes automated testing and best practices.
                </p>
                <a href="#" class="btn-primary bg-red-600 hover:bg-red-700 focus:ring-red-500 inline-flex shadow-red-500/30">Read Tutorial</a>
            </div>
            <div class="flex-1 w-full flex justify-center">
                <pre class="bg-slate-800 p-6 rounded-xl text-green-400 text-sm overflow-x-auto shadow-2xl border border-slate-700 w-full max-w-md"><code>Route::middleware('auth:sanctum')
    ->prefix('v1')
    ->group(function () {
        Route::apiResource('users', 
            UserController::class
        );
        Route::get('/analytics', 
            StatsController::class
        );
});</code></pre>
            </div>
        </div>
    </div>
</div>
@endsection
