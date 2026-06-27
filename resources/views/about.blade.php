@extends('layouts.public')

@section('title', 'About Soufain Najmi')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
    <div class="flex flex-col md:flex-row gap-12 items-start">
        
        <!-- About Content -->
        <div class="flex-1 space-y-8">
            <div>
                <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-slate-900 dark:text-white mb-4">
                    About <span class="text-primary">Me</span>
                </h1>
                <div class="h-1 w-20 bg-primary rounded"></div>
            </div>
            
            <div class="prose dark:prose-invert prose-lg max-w-none text-slate-600 dark:text-slate-300">
                <p>
                    Hello! I'm <strong>Soufain Najmi</strong>, a passionate Full Stack Laravel Developer and AI Automation Engineer. 
                    I specialize in building scalable web applications, designing intuitive user interfaces, and creating autonomous AI agents to automate complex business workflows.
                </p>
                <p>
                    With a deep understanding of modern web technologies and a constant drive to learn, I've dedicated myself to bridging the gap between traditional software development and cutting-edge artificial intelligence. 
                    My goal is to craft digital experiences that are not only beautiful and fast but also intelligent and highly efficient.
                </p>
                <p>
                    Through <em>Najmi Academy</em>, I aim to share my knowledge, document my journey, and help other developers master Laravel, n8n, and AI Automation.
                </p>
            </div>
            
            <!-- Skills/Specialties -->
            <div>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">My Specialties</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    @php
                        $skills = [
                            'Laravel', 'PHP', 'MySQL', 'Tailwind CSS', 'JavaScript', 'Alpine.js',
                            'REST APIs', 'Git & GitHub', 'Linux', 'Docker', 'VPS Deployment',
                            'n8n Automation', 'AI Integrations', 'OpenAI API', 'Google Sheets API', 'Email Automation'
                        ];
                    @endphp
                    
                    @foreach($skills as $skill)
                    <div class="flex items-center gap-2 bg-white dark:bg-slate-800 p-3 rounded-lg shadow-sm border border-slate-100 dark:border-slate-700">
                        <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span class="font-medium text-slate-700 dark:text-slate-200">{{ $skill }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        <!-- Timeline -->
        <div class="w-full md:w-1/3 flex-shrink-0">
            <div class="glass p-8 rounded-2xl sticky top-24">
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 border-b border-slate-200 dark:border-slate-700 pb-4">Learning Journey</h3>
                
                <div class="space-y-8 relative before:absolute before:inset-0 before:ml-2 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-slate-300 before:to-transparent">
                    
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                        <div class="flex items-center justify-center w-5 h-5 rounded-full border-4 border-white dark:border-slate-900 bg-primary text-slate-500 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10"></div>
                        <div class="w-[calc(100%-2rem)] md:w-[calc(50%-1.5rem)] ml-4 md:ml-0 p-4 rounded-xl bg-white dark:bg-slate-800 shadow-sm border border-slate-100 dark:border-slate-700">
                            <div class="flex items-center justify-between mb-1">
                                <h4 class="font-bold text-slate-900 dark:text-white">AI Automation</h4>
                            </div>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Mastering n8n, OpenAI integrations, and workflow automation.</p>
                        </div>
                    </div>
                    
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                        <div class="flex items-center justify-center w-5 h-5 rounded-full border-4 border-white dark:border-slate-900 bg-accent text-slate-500 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10"></div>
                        <div class="w-[calc(100%-2rem)] md:w-[calc(50%-1.5rem)] ml-4 md:ml-0 p-4 rounded-xl bg-white dark:bg-slate-800 shadow-sm border border-slate-100 dark:border-slate-700">
                            <div class="flex items-center justify-between mb-1">
                                <h4 class="font-bold text-slate-900 dark:text-white">Advanced Laravel</h4>
                            </div>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Deep dive into Architecture, APIs, Queues, and optimization.</p>
                        </div>
                    </div>
                    
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                        <div class="flex items-center justify-center w-5 h-5 rounded-full border-4 border-white dark:border-slate-900 bg-slate-400 text-slate-500 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10"></div>
                        <div class="w-[calc(100%-2rem)] md:w-[calc(50%-1.5rem)] ml-4 md:ml-0 p-4 rounded-xl bg-white dark:bg-slate-800 shadow-sm border border-slate-100 dark:border-slate-700">
                            <div class="flex items-center justify-between mb-1">
                                <h4 class="font-bold text-slate-900 dark:text-white">Full Stack Dev</h4>
                            </div>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Building UI/UX with Tailwind CSS, Alpine, and Vue/React.</p>
                        </div>
                    </div>
                    
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                        <div class="flex items-center justify-center w-5 h-5 rounded-full border-4 border-white dark:border-slate-900 bg-slate-300 text-slate-500 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10"></div>
                        <div class="w-[calc(100%-2rem)] md:w-[calc(50%-1.5rem)] ml-4 md:ml-0 p-4 rounded-xl bg-white dark:bg-slate-800 shadow-sm border border-slate-100 dark:border-slate-700">
                            <div class="flex items-center justify-between mb-1">
                                <h4 class="font-bold text-slate-900 dark:text-white">The Beginning</h4>
                            </div>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Started coding with PHP, MySQL and basic HTML/CSS.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
