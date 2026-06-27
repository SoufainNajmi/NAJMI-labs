@extends('layouts.public')

@section('title', 'Blog & Technical Articles')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
    <div class="flex flex-col md:flex-row justify-between items-end mb-12 border-b border-slate-200 dark:border-slate-800 pb-6 gap-6">
        <div>
            <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white mb-2">Technical Blog</h1>
            <p class="text-lg text-slate-600 dark:text-slate-400">Deep dives, tutorials, and insights.</p>
        </div>
        
        <!-- Search -->
        <div class="w-full md:w-auto relative">
            <input type="text" placeholder="Search articles..." class="w-full md:w-64 pl-10 pr-4 py-2 rounded-full border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary text-slate-900 dark:text-white text-sm shadow-sm transition-all">
            <svg class="w-5 h-5 absolute left-3 top-2.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
    </div>

    <!-- Categories -->
    <div class="flex overflow-x-auto pb-4 mb-8 hidden-scrollbar gap-3">
        <a href="{{ route('blog.index') }}" class="whitespace-nowrap px-4 py-1.5 rounded-full text-sm font-medium {{ !request()->has('category') ? 'bg-primary text-white' : 'bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700' }}">All</a>
        @foreach($categories as $category)
            <a href="?category={{ $category->slug }}" class="whitespace-nowrap px-4 py-1.5 rounded-full text-sm font-medium {{ request('category') === $category->slug ? 'bg-primary text-white' : 'bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700' }}">
                {{ $category->name }}
            </a>
        @endforeach
    </div>

    <!-- Articles Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($articles as $article)
        <article class="glass rounded-2xl overflow-hidden flex flex-col group hover:-translate-y-1 transition-all duration-300">
            <a href="{{ route('blog.show', $article->slug) }}" class="block h-52 bg-slate-200 dark:bg-slate-800 relative overflow-hidden">
                @if($article->image)
                    <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                @else
                    <div class="absolute inset-0 bg-gradient-to-tr from-primary/30 to-accent/30 mix-blend-overlay"></div>
                    <div class="w-full h-full flex items-center justify-center text-slate-400">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                    </div>
                @endif
                <div class="absolute top-4 left-4">
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-white/90 text-{{ $article->category->color ?? 'primary' }}-600 shadow-sm backdrop-blur">
                        {{ $article->category->name ?? 'Uncategorized' }}
                    </span>
                </div>
            </a>
            
            <div class="p-6 flex-1 flex flex-col">
                <div class="flex gap-4 items-center text-xs text-slate-500 dark:text-slate-400 mb-3">
                    <time datetime="{{ \Carbon\Carbon::parse($article->created_at)->format('Y-m-d') }}">{{ \Carbon\Carbon::parse($article->created_at)->format('M d, Y') }}</time>
                    <span class="w-1 h-1 rounded-full bg-slate-300 dark:bg-slate-600"></span>
                    <span>{{ $article->reading_time }} min read</span>
                </div>
                
                <h2 class="text-xl font-bold text-slate-900 dark:text-white mb-2 leading-tight">
                    <a href="{{ route('blog.show', $article->slug) }}" class="hover:text-primary transition-colors">
                        {{ $article->title }}
                    </a>
                </h2>
                
                <p class="text-slate-600 dark:text-slate-400 mb-4 line-clamp-3 text-sm">
                    {{ $article->excerpt ?? 'No description available for this article.' }}
                </p>
                
                <div class="mt-auto pt-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                    <a href="{{ route('blog.show', $article->slug) }}" class="text-primary font-semibold text-sm hover:underline">Read Article &rarr;</a>
                </div>
            </div>
        </article>
        @endforeach
    </div>
    
    <!-- Demo Pagination -->
    <div class="mt-12 flex justify-center">
        <nav class="flex items-center gap-2">
            <span class="px-4 py-2 rounded-md bg-primary text-white text-sm font-medium">1</span>
            <a href="#" class="px-4 py-2 rounded-md hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 text-sm font-medium transition-colors">2</a>
            <a href="#" class="px-4 py-2 rounded-md hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 text-sm font-medium transition-colors">3</a>
            <span class="px-2 text-slate-500">...</span>
            <a href="#" class="px-2 py-2 rounded-md hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 text-sm font-medium transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </nav>
    </div>
</div>
@endsection
