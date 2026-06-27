@extends('layouts.public')

@section('title', $article->title)

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
    <!-- Header -->
    <header class="mb-10 text-center">
        <div class="flex items-center justify-center gap-3 text-sm text-slate-500 dark:text-slate-400 mb-6 font-medium">
            <a href="{{ route('blog.index', ['category' => $article->category->slug ?? '']) }}" class="text-primary hover:underline uppercase tracking-wide font-bold">
                {{ $article->category->name ?? 'Uncategorized' }}
            </a>
            <span class="w-1.5 h-1.5 rounded-full bg-slate-300 dark:bg-slate-600"></span>
            <time>{{ \Carbon\Carbon::parse($article->created_at)->format('F d, Y') }}</time>
            <span class="w-1.5 h-1.5 rounded-full bg-slate-300 dark:bg-slate-600"></span>
            <span>{{ $article->reading_time }} min read</span>
            <span class="w-1.5 h-1.5 rounded-full bg-slate-300 dark:bg-slate-600"></span>
            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg> {{ number_format($article->views) }}</span>
        </div>
        
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-slate-900 dark:text-white mb-8 leading-tight">
            {{ $article->title }}
        </h1>
        
        <div class="flex items-center justify-center gap-4">
            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-primary to-accent flex items-center justify-center text-white font-bold text-xl shadow-md">N</div>
            <div class="text-left">
                <p class="font-semibold text-slate-900 dark:text-white">{{ $article->user->name ?? 'Soufain Najmi' }}</p>
                <p class="text-sm text-slate-500">{{ $article->user->title ?? 'Platform Author' }}</p>
            </div>
        </div>
    </header>

    <!-- Thumbnail -->
    <div class="w-full aspect-[21/9] bg-slate-800 rounded-2xl mb-12 overflow-hidden shadow-2xl border border-slate-200 dark:border-slate-700 relative">
        @if($article->image)
            <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
        @else
            <div class="absolute inset-0 bg-gradient-to-tr from-primary/30 to-accent/30 mix-blend-overlay"></div>
            <div class="w-full h-full flex flex-col items-center justify-center text-white">
                <svg class="w-16 h-16 opacity-50 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                <span class="text-xl font-bold opacity-80">{{ $article->title }}</span>
            </div>
        @endif
    </div>

    <!-- Content Markdown output (prose) -->
    <article class="prose dark:prose-invert prose-lg max-w-none prose-a:text-primary hover:prose-a:text-primary/80 prose-headings:font-bold prose-img:rounded-xl">
        {!! $article->content !!}
    </article>

    <!-- Tags -->
    @if(isset($article->tags) && count($article->tags) > 0)
    <div class="mt-12 flex flex-wrap gap-2 pt-8 border-t border-slate-200 dark:border-slate-800">
        @foreach($article->tags as $tag)
            <span class="px-3 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-sm font-medium text-slate-700 dark:text-slate-300">#{{ $tag->name }}</span>
        @endforeach
    </div>
    @endif

    <!-- Share & Actions -->
    <div class="mt-8 flex items-center justify-between">
        <div class="flex gap-4">
            <button class="text-slate-500 hover:text-red-500 transition-colors flex items-center gap-2 font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                Like
            </button>
        </div>
        <div class="flex items-center gap-3">
            <span class="text-sm font-medium text-slate-600 dark:text-slate-400">Share:</span>
            <a href="#" class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 flex items-center justify-center hover:bg-blue-600 hover:text-white transition-colors">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
            </a>
            <a href="#" class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-800 flex items-center justify-center hover:bg-blue-800 hover:text-white transition-colors">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            </a>
        </div>
    </div>

</div>
@endsection
