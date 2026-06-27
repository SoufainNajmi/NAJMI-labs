<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Najmi Academy') }} - @yield('title', 'Learn Laravel & n8n')</title>

    <!-- SEO Meta -->
    <meta name="description" content="@yield('meta_description', 'Learn modern Web Development, AI Automation, Laravel, and n8n with Soufain Najmi.')">

    <!-- Alpine.js & Tailwind (via Vite) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-50 dark:bg-secondary text-slate-800 dark:text-slate-200 antialiased selection:bg-primary selection:text-white flex flex-col min-h-screen transition-colors duration-300">
    
    <!-- Navigation -->
    <nav x-data="{ mobileMenuOpen: false }" class="fixed w-full z-50 glass top-0 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-accent flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-primary/30 group-hover:shadow-primary/50 transition-all duration-300">
                            N
                        </div>
                        <span class="font-bold text-xl tracking-tight hidden sm:block">Najmi<span class="text-primary">Academy</span></span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex md:items-center md:space-x-8">
                    <a href="{{ route('home') }}" class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('home') ? 'text-primary' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('about') ? 'text-primary' : '' }}">About</a>
                    <a href="{{ route('projects.index') }}" class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('projects.*') ? 'text-primary' : '' }}">Projects</a>
                    <a href="{{ route('blog.index') }}" class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('blog.*') ? 'text-primary' : '' }}">Blog</a>
                    
                    <div x-data="{ open: false }" class="relative" @click.outside="open = false">
                        <button @click="open = !open" class="text-sm font-medium hover:text-primary transition-colors flex items-center gap-1 {{ request()->routeIs('tutorials', 'laravel.academy', 'n8n.academy', 'ai') ? 'text-primary' : '' }}">
                            Learn
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="open" x-transition.opacity class="absolute top-full right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white dark:bg-slate-800 ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <a href="{{ route('tutorials') }}" class="block px-4 py-2 text-sm hover:bg-slate-50 dark:hover:bg-slate-700">All Tutorials</a>
                            <a href="{{ route('laravel.academy') }}" class="block px-4 py-2 text-sm hover:bg-slate-50 dark:hover:bg-slate-700">Laravel Academy</a>
                            <a href="{{ route('n8n.academy') }}" class="block px-4 py-2 text-sm hover:bg-slate-50 dark:hover:bg-slate-700">n8n Automation</a>
                            <a href="{{ route('ai') }}" class="block px-4 py-2 text-sm hover:bg-slate-50 dark:hover:bg-slate-700">AI & LLMs</a>
                        </div>
                    </div>
                </div>

                <!-- Right Actions -->
                <div class="hidden md:flex md:items-center md:space-x-4">
                    <!-- Theme Toggle -->
                    <button @click="document.documentElement.classList.toggle('dark')" class="p-2 rounded-full hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors focus:outline-none" aria-label="Toggle Dark Mode">
                        <!-- Sun (shown in dark mode) -->
                        <svg class="w-5 h-5 hidden dark:block text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        <!-- Moon (shown in light mode) -->
                        <svg class="w-5 h-5 block dark:hidden text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    </button>
                    
                    <a href="{{ route('contact.show') }}" class="btn-primary text-sm shadow-md">Let's Talk</a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="p-2 rounded-md focus:outline-none hover:bg-slate-200 dark:hover:bg-slate-800">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="!mobileMenuOpen"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="mobileMenuOpen" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" class="md:hidden glass border-t border-slate-200 dark:border-slate-800 transition-transform origin-top" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-y-95" x-transition:enter-end="opacity-100 scale-y-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-y-100" x-transition:leave-end="opacity-0 scale-y-95" style="display: none;">
            <div class="px-2 pt-2 pb-5 space-y-1 sm:px-3">
                <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'bg-primary/10 text-primary' : 'hover:bg-slate-100 dark:hover:bg-slate-800' }}">Home</a>
                <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'bg-primary/10 text-primary' : 'hover:bg-slate-100 dark:hover:bg-slate-800' }}">About</a>
                <a href="{{ route('projects.index') }}" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-slate-100 dark:hover:bg-slate-800">Projects</a>
                <a href="{{ route('blog.index') }}" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-slate-100 dark:hover:bg-slate-800">Blog</a>
                <a href="{{ route('tutorials') }}" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-slate-100 dark:hover:bg-slate-800">Tutorials</a>
                <a href="{{ route('contact.show') }}" class="block px-3 py-2 rounded-md text-base font-medium bg-primary text-white mt-4 text-center">Let's Talk</a>
                
                <button @click="document.documentElement.classList.toggle('dark')" class="mt-4 w-full flex items-center justify-center gap-2 p-2 rounded-md border border-slate-200 dark:border-slate-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    Toggle Theme
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-200 dark:border-slate-800 mt-20 pt-16 pb-8 bg-white dark:bg-slate-900/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 md:gap-8 mb-12">
                <div class="col-span-1 md:col-span-2">
                    <a href="/" class="flex items-center gap-2 mb-4">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-primary to-accent flex items-center justify-center text-white font-bold">N</div>
                        <span class="font-bold text-xl hidden sm:block">Najmi<span class="text-primary">Academy</span></span>
                    </a>
                    <p class="text-slate-500 dark:text-slate-400 mb-6 max-w-md leading-relaxed">
                        Learn Laravel, n8n, AI Automation & Modern Web Development. Elevate your coding journey with practical tutorials and open-source projects.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-slate-400 hover:text-primary transition-colors"><span class="sr-only">GitHub</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-primary transition-colors"><span class="sr-only">LinkedIn</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="font-semibold text-slate-900 dark:text-white mb-4">Learning</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('laravel.academy') }}" class="text-slate-500 hover:text-primary dark:text-slate-400">Laravel Architecture</a></li>
                        <li><a href="{{ route('n8n.academy') }}" class="text-slate-500 hover:text-primary dark:text-slate-400">n8n Automation</a></li>
                        <li><a href="{{ route('ai') }}" class="text-slate-500 hover:text-primary dark:text-slate-400">AI Integration</a></li>
                        <li><a href="{{ route('tutorials') }}" class="text-slate-500 hover:text-primary dark:text-slate-400">API Development</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold text-slate-900 dark:text-white mb-4">Resources</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('blog.index') }}" class="text-slate-500 hover:text-primary dark:text-slate-400">Articles</a></li>
                        <li><a href="{{ route('projects.index') }}" class="text-slate-500 hover:text-primary dark:text-slate-400">Projects</a></li>
                        <li><a href="{{ route('about') }}" class="text-slate-500 hover:text-primary dark:text-slate-400">About Me</a></li>
                        <li><a href="{{ route('contact.show') }}" class="text-slate-500 hover:text-primary dark:text-slate-400">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 border-t border-slate-200 dark:border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-slate-500 flex items-center gap-1">
                    &copy; {{ date('Y') }} Soufain Najmi. All rights reserved.
                </p>
                <div class="flex items-center gap-4">
                    <a href="/sitemap.xml" class="text-sm text-slate-500 hover:text-primary">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
