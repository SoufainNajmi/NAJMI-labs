@extends('layouts.public')

@section('title', 'Senior Full Stack Laravel Developer & AI Automation Engineer')

@section('meta_description', 'Soufain Najmi is a Full Stack Laravel Developer and AI Automation Engineer. Explore my projects, tutorials, and articles on Laravel, n8n, and web development.')

@section('content')
<div class="relative overflow-hidden">
    <!-- Background Gradients -->
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#2563eb] to-[#38bdf8] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
    </div>
    
    <!-- Hero Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20">
        <div class="text-center md:text-left flex flex-col md:flex-row items-center gap-12">
            
            <div class="flex-1 space-y-8" x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 100)">
                <div class="inline-flex items-center rounded-full px-3 py-1 text-sm font-semibold text-primary ring-1 ring-primary/20 bg-primary/10 dark:bg-primary/20 dark:ring-primary/30 transition-all duration-300 hover:ring-primary/50" x-show="shown" x-transition:enter="transition-all duration-700 ease-out transform" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                    <span class="flex h-2 w-2 rounded-full bg-primary mr-2 animate-pulse"></span>
                    Available for new projects
                </div>
                
                <h1 class="text-5xl md:text-7xl font-bold tracking-tight text-slate-900 dark:text-white" x-show="shown" x-transition:enter="transition-all duration-700 delay-100 ease-out transform" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0">
                    Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent">Soufain Najmi</span>
                </h1>
                
                <p class="text-xl md:text-2xl text-slate-600 dark:text-slate-300 max-w-2xl font-medium" x-show="shown" x-transition:enter="transition-all duration-700 delay-200 ease-out transform" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0">
                    <span class="block">Full Stack Laravel Developer</span>
                    <span class="block text-primary/80 dark:text-primary/90">AI Automation Engineer</span>
                    <span class="block text-accent/80 dark:text-accent/90">n8n Workflow Developer</span>
                </p>
                
                <p class="text-lg text-slate-500 dark:text-slate-400 max-w-xl mx-auto md:mx-0" x-show="shown" x-transition:enter="transition-all duration-700 delay-300 ease-out transform" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0">
                    I build scalable web applications, automate complex workflows, and integrate AI to solve real-world problems. Welcome to my digital campus.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start" x-show="shown" x-transition:enter="transition-all duration-700 delay-400 ease-out transform" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0">
                    <a href="{{ route('blog.index') }}" class="btn-primary text-base px-8 py-3">Explore Articles</a>
                    <a href="{{ route('projects.index') }}" class="inline-flex items-center justify-center px-8 py-3 border-2 border-slate-200 dark:border-slate-700 rounded-md font-semibold text-base text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">View Projects</a>
                    <a href="{{ route('contact.show') }}" class="inline-flex items-center justify-center text-primary dark:text-accent font-semibold hover:underline px-4 py-3">Contact Me -></a>
                </div>
            </div>

            <!-- Profile Image / Geometric Art -->
            <div class="flex-1 relative w-full max-w-lg mx-auto md:max-w-none" x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 500)">
                <div class="aspect-square rounded-2xl overflow-hidden glass p-4 relative group" x-show="shown" x-transition:enter="transition-all duration-1000 ease-out transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
                    <div class="absolute inset-0 bg-gradient-to-tr from-primary/20 to-accent/20 group-hover:opacity-100 transition-opacity duration-1000"></div>
                    <div class="w-full h-full bg-slate-100 dark:bg-slate-800 rounded-xl relative overflow-hidden flex items-center justify-center">
                        <div class="absolute w-64 h-64 bg-primary/30 rounded-full blur-3xl animate-[spin_8s_linear_infinite] z-0"></div>
                        <img src="{{ asset('build/assets/x1.png') }}" class="w-full h-full object-cover absolute inset-0 z-10" alt="Developer Profile">
                        <img src="{{ asset('build/assets/x2.png') }}" class="w-24 h-24 absolute bottom-4 right-4 z-20 drop-shadow-2xl hover:scale-110 transition-transform duration-300" alt="Decoration">
                    </div>
                    
                    <!-- Floating Badge 1 -->
                    <div class="absolute -bottom-6 -left-6 glass px-4 py-3 rounded-lg flex items-center gap-3 animate-bounce" style="animation-duration: 3s;">
                        <div class="w-10 h-10 bg-[#FF2D20]/10 rounded-full flex items-center justify-center text-[#FF2D20]">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M22.091 6.574l-9.176-5.328a1.868 1.868 0 00-1.83 0L1.91 6.574A1.864 1.864 0 001 8.163v10.669a1.864 1.864 0 00.91 1.589l9.176 5.328a1.868 1.868 0 001.83 0l9.176-5.328a1.864 1.864 0 00.91-1.589V8.163a1.864 1.864 0 00-.911-1.589zM12 21.054a.434.434 0 01-.212-.054l-8.5-4.935a.434.434 0 01-.212-.375V6.435a.434.434 0 01.212-.375l8.5-4.935a.434.434 0 01.424 0l8.5 4.935a.434.434 0 01.212.375v9.255a.434.434 0 01-.212.375l-8.5 4.935a.434.434 0 01-.212.054z"/><path d="M11.833 13.917l-3.328-1.921V8.291l3.328 1.921zm.334 0l3.328-1.921V8.291l-3.328 1.921zM7.5 16.917l4.5-2.6V9.116L7.5 11.716zm9 0l-4.5-2.6V9.116l4.5 2.6zM12 6.6l3.33-1.92-3.33-1.92-3.33 1.92z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 font-medium">Framework</p>
                            <p class="text-sm font-bold text-slate-800 dark:text-white">Laravel 12</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="relative py-12 md:py-20 border-y border-slate-200 dark:border-slate-800/50 bg-slate-100/50 dark:bg-slate-900/20" x-data="{ hasIntersected: false }" x-intersect="hasIntersected = true">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center" x-show="hasIntersected" x-transition:enter="transition-all duration-1000 ease-out" x-transition:enter-start="opacity-0 translate-y-10" x-transition:enter-end="opacity-100 translate-y-0">
                
                <div class="p-6 rounded-2xl glass hover:shadow-primary/10 transition-shadow">
                    <div class="text-4xl font-bold text-primary mb-2">
                        <span x-data="{ count: 0 }" x-init="if (hasIntersected) { let i = 0; let interval = setInterval(() => { count++; if(count >= 40) clearInterval(interval); }, 50); }" x-text="count">0</span>+
                    </div>
                    <div class="text-sm font-medium text-slate-500 dark:text-slate-400">Articles Published</div>
                </div>
                
                <div class="p-6 rounded-2xl glass hover:shadow-primary/10 transition-shadow">
                    <div class="text-4xl font-bold text-accent mb-2">
                        <span x-data="{ count: 0 }" x-init="if (hasIntersected) { let i = 0; let interval = setInterval(() => { count++; if(count >= 25) clearInterval(interval); }, 60); }" x-text="count">0</span>+
                    </div>
                    <div class="text-sm font-medium text-slate-500 dark:text-slate-400">Production Projects</div>
                </div>
                
                <div class="p-6 rounded-2xl glass hover:shadow-primary/10 transition-shadow">
                    <div class="text-4xl font-bold text-primary mb-2">
                        <span x-data="{ count: 0 }" x-init="if (hasIntersected) { let i = 0; let interval = setInterval(() => { count++; if(count >= 15) clearInterval(interval); }, 100); }" x-text="count">0</span>+
                    </div>
                    <div class="text-sm font-medium text-slate-500 dark:text-slate-400">Core Technologies</div>
                </div>
                
                <div class="p-6 rounded-2xl glass hover:shadow-primary/10 transition-shadow">
                    <div class="text-4xl font-bold text-accent mb-2">
                        <span x-data="{ count: 0 }" x-init="if (hasIntersected) { let i = 0; let interval = setInterval(() => { count++; if(count >= 5) clearInterval(interval); }, 300); }" x-text="count">0</span>+
                    </div>
                    <div class="text-sm font-medium text-slate-500 dark:text-slate-400">Years of Learning</div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
