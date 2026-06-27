@extends('layouts.public')

@section('title', 'n8n Academy - Automation Workflow Mastery')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h1 class="text-4xl mx-auto md:text-5xl font-bold tracking-tight text-slate-900 dark:text-white mb-6">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-red-500">n8n</span> Academy
        </h1>
        <p class="text-xl text-slate-600 dark:text-slate-400">
            Learn how to automate your workflows, integrate AI, and build powerful autonomous agents without writing extensive code.
        </p>
    </div>

    <!-- Core Concepts -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-8 border-b-2 border-primary/20 pb-2 inline-block">Core Concepts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $concepts = [
                    ['title' => 'What is n8n', 'desc' => 'Introduction to the fair-code workflow automation tool.'],
                    ['title' => 'Workflow', 'desc' => 'How to structure, build, and organize your automations.'],
                    ['title' => 'Trigger', 'desc' => 'Starting your workflows visually on schedule or on event.'],
                    ['title' => 'Webhook', 'desc' => 'Catching external POST/GET requests to trigger automations.'],
                    ['title' => 'HTTP Request', 'desc' => 'Communicating with any REST API gracefully.'],
                    ['title' => 'IF & Switch Nodes', 'desc' => 'Routing logic based on variables and output data.'],
                    ['title' => 'Code Node', 'desc' => 'Writing custom JavaScript/Python snippets.'],
                    ['title' => 'Schedule', 'desc' => 'Running cron-like scheduled tasks effortlessly.'],
                ];
            @endphp
            
            @foreach($concepts as $item)
            <div class="glass p-6 rounded-xl hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900/30 text-orange-500 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">{{ $item['title'] }}</h3>
                <p class="text-slate-600 dark:text-slate-400">{{ $item['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Integrations & AI -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-8 border-b-2 border-primary/20 pb-2 inline-block">Integrations & AI Logic</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="glass p-8 rounded-2xl border-l-4 border-green-500">
                <h3 class="text-2xl font-bold mb-4 dark:text-white">Everyday Apps Integration</h3>
                <ul class="space-y-3 text-slate-600 dark:text-slate-300">
                    <li class="flex items-center gap-2"><svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> <strong>Gmail:</strong> Automate reading, sorting, and sending emails.</li>
                    <li class="flex items-center gap-2"><svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> <strong>Google Sheets:</strong> CRUD operations on spreadsheets easily.</li>
                </ul>
            </div>
            <div class="glass p-8 rounded-2xl border-l-4 border-purple-500">
                <h3 class="text-2xl font-bold mb-4 dark:text-white">AI Automation</h3>
                <ul class="space-y-3 text-slate-600 dark:text-slate-300">
                    <li class="flex items-center gap-2"><svg class="w-5 h-5 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> <strong>OpenAI Node:</strong> Connect to GPT models for text and image tasks.</li>
                    <li class="flex items-center gap-2"><svg class="w-5 h-5 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> <strong>AI Agent:</strong> Build self-reasoning agents equipped with tools.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Workflow Examples placeholder -->
    <div class="glass p-8 rounded-3xl bg-slate-900 overflow-hidden relative">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff8a00] to-[#e52e71] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
        </div>
        <h2 class="text-3xl font-bold text-white mb-6 text-center">Automation Examples</h2>
        <div class="aspect-video w-full max-w-4xl mx-auto rounded-xl border border-slate-700 bg-slate-800/80 backdrop-blur flex items-center justify-center flex-col">
            <svg class="w-20 h-20 text-slate-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            <p class="text-slate-400 font-medium text-lg">Workflow Screenshot Placeholder</p>
        </div>
    </div>
</div>
@endsection
