@extends('layouts.public')

@section('title', 'AI Automation & LLMs integration')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h1 class="text-4xl mx-auto md:text-5xl font-bold tracking-tight text-slate-900 dark:text-white mb-6">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">AI</span> Integration Center
        </h1>
        <p class="text-xl text-slate-600 dark:text-slate-400">
            Unleashing the power of Large Language Models within web applications.
        </p>
    </div>

    <!-- AI Topics -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
        @php
            $ai_topics = [
                ['title' => 'ChatGPT & LLMs', 'desc' => 'Understanding generative AI limits, capabilities, and system prompts.', 'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'color' => 'text-blue-500'],
                ['title' => 'OpenAI API', 'desc' => 'Calling endpoints, managing tokens, streaming responses, and function calling.', 'icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4', 'color' => 'text-cyan-500'],
                ['title' => 'Prompt Engineering', 'desc' => 'Crafting robust prompts (Few-Shot, CoT) to minimize hallucinations in automation.', 'icon' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z', 'color' => 'text-indigo-500'],
                ['title' => 'AI Agents', 'desc' => 'Designing multi-step agents that can decide, fetch data, and perform actions.', 'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10', 'color' => 'text-teal-500'],
            ];
        @endphp
        
        @foreach($ai_topics as $item)
        <div class="glass p-8 rounded-2xl flex gap-6 hover:shadow-xl transition-shadow duration-300">
            <div class="{{ $item['color'] }} shrink-0">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $item['icon'] }}"></path>
                </svg>
            </div>
            <div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">{{ $item['title'] }}</h3>
                <p class="text-slate-600 dark:text-slate-400 leading-relaxed">{{ $item['desc'] }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Use Cases Integration -->
    <h2 class="text-3xl font-bold text-center text-slate-900 dark:text-white mb-10">Real-World Architectures</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="glass p-8 rounded-3xl relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-red-500/10 to-transparent pointer-events-none"></div>
            <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 relative z-10">AI + Laravel</h3>
            <p class="text-slate-600 dark:text-slate-300 mb-6 relative z-10">
                How to integrate AI directly into your SaaS Backend. From automated Customer Support using Retrieval-Augmented Generation (RAG) to smart data extraction and summarizing user content effortlessly.
            </p>
            <a href="#" class="text-red-500 font-semibold hover:underline relative z-10">View Laravel + AI Projects -></a>
        </div>
        
        <div class="glass p-8 rounded-3xl relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-orange-500/10 to-transparent pointer-events-none"></div>
            <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 relative z-10">AI + n8n</h3>
            <p class="text-slate-600 dark:text-slate-300 mb-6 relative z-10">
                Building autonomous tools without writing a backend. Connecting GPT to your mailbox, Slack, or CRM to act automatically based on natural language commands and scheduled routines.
            </p>
            <a href="#" class="text-orange-500 font-semibold hover:underline relative z-10">View n8n + AI Workflows -></a>
        </div>
    </div>
</div>
@endsection
