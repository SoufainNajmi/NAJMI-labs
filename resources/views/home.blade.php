@extends('layouts.public')

@section('title', 'Senior Full Stack Laravel Developer & AI Automation Engineer')
@section('meta_description', 'Soufain Najmi is a Full Stack Laravel Developer and AI Automation Engineer. Explore my projects, tutorials, and articles on Laravel, n8n, and web development.')

@section('content')
    <div class="relative overflow-hidden">
        <!-- Background Gradients -->
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div
                class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#2563eb] to-[#38bdf8] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem] animate-pulse-slow">
            </div>
        </div>

        <!-- Floating Particles Background -->
        <div class="absolute inset-0 -z-5 overflow-hidden pointer-events-none" aria-hidden="true">
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-primary/20 rounded-full animate-float-slow"
                style="animation-delay: 0s;"></div>
            <div class="absolute top-1/3 right-1/4 w-3 h-3 bg-accent/20 rounded-full animate-float-slower"
                style="animation-delay: 1s;"></div>
            <div class="absolute bottom-1/4 left-1/3 w-2.5 h-2.5 bg-primary/15 rounded-full animate-float-medium"
                style="animation-delay: 2s;"></div>
            <div class="absolute top-2/3 right-1/3 w-4 h-4 bg-accent/15 rounded-full animate-float-slow"
                style="animation-delay: 0.5s;"></div>
            <div class="absolute bottom-1/3 left-1/5 w-1.5 h-1.5 bg-primary/20 rounded-full animate-float-slower"
                style="animation-delay: 1.5s;"></div>
        </div>

        <!-- Hero Section -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20" aria-label="Introduction">
            <div class="text-center md:text-left flex flex-col md:flex-row items-center gap-12">
                <div class="flex-1 space-y-8" x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 100)">
                    <!-- Status Badge -->
                    <div class="inline-flex items-center rounded-full px-4 py-1.5 text-sm font-semibold text-primary ring-1 ring-primary/20 bg-primary/10 dark:bg-primary/20 dark:ring-primary/30 transition-all duration-300 hover:ring-primary/50 hover:bg-primary/20 dark:hover:bg-primary/30 hover:-translate-y-1 hover:shadow-lg hover:shadow-primary/20 cursor-default group"
                        x-show="shown" x-transition:enter="transition-all duration-700 ease-out transform"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0">
                        <span class="relative flex h-2.5 w-2.5 mr-2.5">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-primary"></span>
                        </span>
                        <span class="group-hover:scale-105 transition-transform">Available for new projects</span>
                        <span class="ml-2 inline-block transition-transform group-hover:translate-x-1">→</span>
                    </div>

                    <!-- Heading with typing effect -->
                    <h1 class="text-5xl md:text-7xl font-bold tracking-tight text-slate-900 dark:text-white" x-show="shown"
                        x-transition:enter="transition-all duration-700 delay-100 ease-out transform"
                        x-transition:enter-start="opacity-0 translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0">
                        <span
                            class="inline-block animate-gradient-text bg-gradient-to-r from-primary via-accent to-primary bg-[length:200%_auto] bg-clip-text text-transparent">
                            Hi, I'm Soufain Najmi
                        </span>
                    </h1>

                    <!-- Subtitle with staggered typing -->
                    <p class="text-xl md:text-2xl text-slate-600 dark:text-slate-300 max-w-2xl font-medium" x-show="shown"
                        x-transition:enter="transition-all duration-700 delay-200 ease-out transform"
                        x-transition:enter-start="opacity-0 translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0">
                        <span class="block relative">
                            <span class="inline-block animate-pulse-slow text-primary/80 dark:text-primary/90">✦</span>
                            Full Stack Laravel Developer
                        </span>
                        <span class="block text-primary/80 dark:text-primary/90 relative">
                            <span class="inline-block animate-bounce-slow mr-2">⚡</span>
                            AI Automation Engineer
                        </span>
                        <span class="block text-accent/80 dark:text-accent/90 relative">
                            <span class="inline-block animate-spin-slow mr-2">⟳</span>
                            n8n Workflow Developer
                        </span>
                    </p>

                    <!-- Description -->
                    <p class="text-lg text-slate-500 dark:text-slate-400 max-w-xl mx-auto md:mx-0 leading-relaxed"
                        x-show="shown" x-transition:enter="transition-all duration-700 delay-300 ease-out transform"
                        x-transition:enter-start="opacity-0 translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0">
                        I build scalable web applications, automate complex workflows, and integrate AI to solve real-world
                        problems. Welcome to my digital campus.
                    </p>

                    <!-- Call to Actions -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start items-center" x-show="shown"
                        x-transition:enter="transition-all duration-700 delay-400 ease-out transform"
                        x-transition:enter-start="opacity-0 translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0">

                        <a href="{{ route('blog.index') }}"
                            class="relative inline-flex items-center justify-center px-8 py-3.5 text-base font-bold text-white transition-all duration-300 bg-primary border border-transparent rounded-xl hover:bg-primary/90 hover:shadow-xl hover:shadow-primary/40 hover:-translate-y-1 overflow-hidden group">
                            <span
                                class="absolute inset-0 w-full h-full -mt-1 rounded-xl opacity-30 bg-gradient-to-b from-transparent via-transparent to-black/20"></span>
                            <span
                                class="absolute inset-0 w-[150%] h-full bg-white/20 translate-x-[-150%] group-hover:translate-x-[150%] transition-transform duration-700 ease-in-out skew-x-[20deg]"></span>
                            <span
                                class="absolute inset-0 rounded-xl bg-gradient-to-r from-primary to-accent opacity-0 group-hover:opacity-20 transition-opacity duration-500"></span>
                            <span class="relative flex items-center gap-2">
                                Explore Articles
                                <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1 group-hover:scale-110"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </span>
                        </a>

                        <a href="{{ route('projects.index') }}"
                            class="inline-flex items-center justify-center px-8 py-3.5 text-base font-semibold transition-all duration-300 border-2 rounded-xl border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 hover:border-primary hover:text-primary dark:hover:border-primary dark:hover:text-primary hover:-translate-y-1 hover:shadow-lg hover:shadow-slate-200/50 dark:hover:shadow-slate-800/50 bg-white/50 dark:bg-slate-800/50 backdrop-blur-sm group relative overflow-hidden">
                            <span
                                class="absolute inset-0 bg-primary/5 dark:bg-primary/10 translate-y-full group-hover:translate-y-0 transition-transform duration-500"></span>
                            <span class="relative flex items-center">
                                View Projects
                                <svg class="w-4 h-4 ml-2 transition-all duration-300 opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 group-hover:rotate-12"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </span>
                        </a>

                        <a href="{{ route('contact.show') }}"
                            class="relative group inline-flex items-center justify-center gap-3 px-6 py-3.5 text-base font-semibold transition-all duration-300 rounded-xl text-primary dark:text-accent hover:-translate-y-1"
                            aria-label="Contact me">
                            <span
                                class="absolute inset-0 w-full h-full rounded-xl bg-primary/5 dark:bg-accent/5 ring-1 ring-primary/20 dark:ring-accent/20 group-hover:bg-primary/10 dark:group-hover:bg-accent/10 group-hover:ring-primary/40 dark:group-hover:ring-accent/40 group-hover:shadow-[0_0_15px_rgba(37,99,235,0.2)] dark:group-hover:shadow-[0_0_15px_rgba(56,189,248,0.2)] transition-all duration-300"></span>
                            <span
                                class="relative tracking-wide group-hover:tracking-wider transition-all duration-300">Contact
                                Me</span>
                            <div
                                class="relative flex items-center justify-center w-8 h-8 rounded-full bg-primary/10 dark:bg-accent/10 group-hover:bg-primary dark:group-hover:bg-accent transition-all duration-300 group-hover:scale-110">
                                <svg class="w-4 h-4 text-primary dark:text-accent group-hover:text-white transition-all duration-500 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:rotate-12"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Profile Image with enhanced animations -->
                <div class="flex-1 relative w-full max-w-lg mx-auto md:max-w-none" x-data="{ shown: false }"
                    x-init="setTimeout(() => shown = true, 500)">
                    <div class="aspect-square rounded-2xl overflow-hidden glass p-4 relative group" x-show="shown"
                        x-transition:enter="transition-all duration-1000 ease-out transform"
                        x-transition:enter-start="opacity-0 scale-95 rotate-6"
                        x-transition:enter-end="opacity-100 scale-100 rotate-0">

                        <!-- Animated border glow -->
                        <div
                            class="absolute -inset-0.5 bg-gradient-to-r from-primary via-accent to-primary rounded-2xl blur-xl opacity-0 group-hover:opacity-70 transition-opacity duration-1000 animate-rotate-border">
                        </div>

                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-primary/20 to-accent/20 group-hover:opacity-100 transition-opacity duration-1000">
                        </div>

                        <div
                            class="w-full h-full bg-slate-100 dark:bg-slate-800 rounded-xl relative overflow-hidden flex items-center justify-center">
                            <!-- Rotating gradient orb -->
                            <div
                                class="absolute w-72 h-72 bg-primary/30 rounded-full blur-3xl animate-[spin_10s_linear_infinite] z-0">
                            </div>
                            <div
                                class="absolute w-48 h-48 bg-accent/20 rounded-full blur-2xl animate-[spin_15s_linear_infinite_reverse] z-0">
                            </div>

                            <img src="{{ asset('build/assets/x1.png') }}"
                                class="w-full h-full object-cover absolute inset-0 z-10 transition-transform duration-700 group-hover:scale-110"
                                alt="Soufain Najmi - Full Stack Laravel Developer" loading="lazy" decoding="async">

                            <img src="{{ asset('build/assets/x2.png') }}"
                                class="w-24 h-24 absolute bottom-4 right-4 z-20 drop-shadow-2xl transition-all duration-500 hover:scale-125 hover:rotate-12 animate-float-slow"
                                alt="Decoration" loading="lazy" decoding="async">
                        </div>

                        <!-- Floating Badge with bounce -->
                        <div
                            class="absolute -bottom-6 -left-6 glass px-4 py-3 rounded-lg flex items-center gap-3 animate-bounce-slow hover:animate-none hover:scale-105 transition-transform duration-300 shadow-xl">
                            <div
                                class="w-10 h-10 bg-[#FF2D20]/10 rounded-full flex items-center justify-center text-[#FF2D20] animate-pulse-slow">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M22.091 6.574l-9.176-5.328a1.868 1.868 0 00-1.83 0L1.91 6.574A1.864 1.864 0 001 8.163v10.669a1.864 1.864 0 00.91 1.589l9.176 5.328a1.868 1.868 0 001.83 0l9.176-5.328a1.864 1.864 0 00.91-1.589V8.163a1.864 1.864 0 00-.911-1.589zM12 21.054a.434.434 0 01-.212-.054l-8.5-4.935a.434.434 0 01-.212-.375V6.435a.434.434 0 01.212-.375l8.5-4.935a.434.434 0 01.424 0l8.5 4.935a.434.434 0 01.212.375v9.255a.434.434 0 01-.212.375l-8.5 4.935a.434.434 0 01-.212.054z" />
                                    <path
                                        d="M11.833 13.917l-3.328-1.921V8.291l3.328 1.921zm.334 0l3.328-1.921V8.291l-3.328 1.921zM7.5 16.917l4.5-2.6V9.116L7.5 11.716zm9 0l-4.5-2.6V9.116l4.5 2.6zM12 6.6l3.33-1.92-3.33-1.92-3.33 1.92z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 font-medium">Framework</p>
                                <p class="text-sm font-bold text-slate-800 dark:text-white">Laravel 12</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section
            class="relative py-12 md:py-20 border-y border-slate-200 dark:border-slate-800/50 bg-slate-100/50 dark:bg-slate-900/20"
            x-data="{ hasIntersected: false }" x-intersect="hasIntersected = true" aria-label="Statistics">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center" x-show="hasIntersected"
                    x-transition:enter="transition-all duration-1000 ease-out"
                    x-transition:enter-start="opacity-0 translate-y-10" x-transition:enter-end="opacity-100 translate-y-0">

                    @php
                        $stats = [
                            ['label' => 'Articles Published', 'count' => 40, 'delay' => 50, 'color' => 'primary', 'icon' => '📝'],
                            ['label' => 'Production Projects', 'count' => 25, 'delay' => 60, 'color' => 'accent', 'icon' => '🚀'],
                            ['label' => 'Core Technologies', 'count' => 15, 'delay' => 100, 'color' => 'primary', 'icon' => '💻'],
                            ['label' => 'Years of Learning', 'count' => 5, 'delay' => 300, 'color' => 'accent', 'icon' => '🎯'],
                        ];
                    @endphp

                    @foreach($stats as $stat)
                        <div
                            class="p-6 rounded-2xl glass hover:shadow-primary/10 transition-all duration-500 hover:-translate-y-2 group">
                            <div class="text-3xl mb-2 group-hover:scale-125 transition-transform duration-300 inline-block">
                                {{ $stat['icon'] }}</div>
                            <div
                                class="text-4xl font-bold text-{{ $stat['color'] }} mb-2 group-hover:scale-110 transition-transform duration-300">
                                <span x-data="{ count: 0 }" x-init="if (hasIntersected) { 
                                                let interval = setInterval(() => { 
                                                    count += Math.ceil({{ $stat['count'] }} / 40);
                                                    if(count >= {{ $stat['count'] }}) { 
                                                        count = {{ $stat['count'] }};
                                                        clearInterval(interval); 
                                                    }
                                                }, {{ $stat['delay'] }}); 
                                            }" x-text="count">
                                    0
                                </span>+
                            </div>
                            <div
                                class="text-sm font-medium text-slate-500 dark:text-slate-400 group-hover:text-primary transition-colors duration-300">
                                {{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Enhanced Motivation Section -->
        <section class="relative py-20 overflow-hidden" x-data="{ shown: false }" x-intersect.margin.-100px="shown = true"
            aria-label="Motivation and Innovation">

            <!-- Background Decorative Elements -->
            <div class="absolute inset-0 -z-10 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-primary/5 via-transparent to-transparent"
                aria-hidden="true"></div>

            <!-- Animated background shapes -->
            <div class="absolute inset-0 -z-5 overflow-hidden pointer-events-none" aria-hidden="true">
                <div class="absolute top-20 left-10 w-64 h-64 bg-primary/5 rounded-full blur-3xl animate-float-slow"></div>
                <div class="absolute bottom-20 right-10 w-96 h-96 bg-accent/5 rounded-full blur-3xl animate-float-slower">
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-16" x-show="shown"
                    x-transition:enter="transition-all duration-1000 ease-out transform"
                    x-transition:enter-start="opacity-0 translate-y-8 scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 scale-100">
                    <div class="inline-block mb-4">
                        <span class="text-5xl animate-pulse-slow">💡</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-bold text-slate-900 dark:text-white mb-4">
                        Passion <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent animate-gradient-text bg-[length:200%_auto]">&</span>
                        Innovation
                    </h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto leading-relaxed">
                        Bridging the gap between complex problems and elegant, scalable solutions. I am driven by the
                        endless possibilities of technology, constantly learning, and pushing boundaries.
                    </p>
                    <div class="w-24 h-1 bg-gradient-to-r from-primary to-accent mx-auto mt-6 rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16 items-center">
                    @php
                        $motivationItems = [
                            [
                                'image' => 'm1.png',
                                'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
                                'title' => 'Continuous Learning',
                                'description' => 'The tech landscape is ever-evolving, and my passion lies in adapting and mastering new tools. From building robust backend architectures with Laravel to integrating intelligent AI pipelines. Technology isn\'t just my career, it\'s my craft.',
                                'tags' => ['Growth Mindset', 'Curiosity', 'Adaptability'],
                                'order' => '1',
                                'iconColor' => 'primary',
                                'delay' => '300',
                                'emoji' => '📚'
                            ],
                            [
                                'image' => 'm2.png',
                                'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
                                'title' => 'Sharing Knowledge',
                                'description' => 'Through <strong class="text-primary dark:text-accent font-semibold">Najmi Academy</strong>, I aim to empower others by breaking down complex concepts into actionable tutorials. Building a community of developers and innovators is what truly drives my daily motivation.',
                                'tags' => ['Mentoring', 'Community', 'Education'],
                                'order' => '4',
                                'iconColor' => 'accent',
                                'delay' => '700',
                                'emoji' => '🎓'
                            ]
                        ];
                    @endphp

                    @foreach($motivationItems as $index => $item)
                        <!-- Image -->
                        <div class="relative group order-{{ $item['order'] == '1' ? '1' : '3' }}" x-show="shown"
                            x-transition:enter="transition-all duration-1000 delay-{{ $item['delay'] }} ease-out transform"
                            x-transition:enter-start="opacity-0 {{ $index === 0 ? '-translate-x-12 scale-95' : 'translate-x-12 scale-95' }}"
                            x-transition:enter-end="opacity-100 translate-x-0 scale-100">
                            <div
                                class="absolute -inset-1 bg-gradient-to-r from-{{ $item['iconColor'] }} to-{{ $index === 0 ? 'accent' : 'primary' }} rounded-2xl blur opacity-25 group-hover:opacity-70 transition-all duration-1000 group-hover:duration-200 group-hover:scale-105">
                            </div>
                            <div
                                class="relative rounded-2xl overflow-hidden glass shadow-2xl ring-1 ring-white/10 dark:ring-white/5 transition-all duration-500 group-hover:shadow-{{ $item['iconColor'] }}/20">
                                <div
                                    class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black/60 z-10">
                                </div>
                                <img src="{{ asset('build/assets/' . $item['image']) }}" alt="{{ $item['title'] }}"
                                    class="w-full h-auto object-cover transform transition-all duration-700 group-hover:scale-110"
                                    loading="lazy" decoding="async">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-{{ $item['iconColor'] }}/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-5">
                                </div>

                                <!-- Overlay tag -->
                                <div class="absolute bottom-4 left-4 z-20 flex gap-2">
                                    <span
                                        class="px-3 py-1 bg-black/50 backdrop-blur-sm rounded-full text-xs text-white font-medium">
                                        {{ $item['emoji'] }} {{ $item['title'] }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="space-y-6 order-{{ $item['order'] == '1' ? '2' : '4' }}" x-show="shown"
                            x-transition:enter="transition-all duration-1000 delay-{{ $index === 0 ? '500' : '900' }} ease-out transform"
                            x-transition:enter-start="opacity-0 {{ $index === 0 ? 'translate-x-12 scale-95' : '-translate-x-12 scale-95' }}"
                            x-transition:enter-end="opacity-100 translate-x-0 scale-100">
                            <h3
                                class="text-2xl md:text-3xl font-bold text-slate-800 dark:text-slate-100 flex items-center gap-4">
                                <span
                                    class="flex items-center justify-center w-14 h-14 rounded-xl bg-{{ $item['iconColor'] }}/10 text-{{ $item['iconColor'] }} shadow-inner group-hover:scale-110 transition-transform duration-300 relative">
                                    <span
                                        class="absolute inset-0 rounded-xl bg-{{ $item['iconColor'] }}/20 blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                                    <svg class="w-7 h-7 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="{{ $item['icon'] }}"></path>
                                    </svg>
                                </span>
                                <span class="relative">
                                    {{ $item['title'] }}
                                    <span
                                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-{{ $item['iconColor'] }} to-transparent transition-all duration-700 group-hover:w-full"></span>
                                </span>
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-lg">
                                {!! $item['description'] !!}
                            </p>
                            <div class="flex flex-wrap items-center gap-3 pt-2">
                                @foreach($item['tags'] as $tag)
                                    <span
                                        class="px-4 py-1.5 rounded-full bg-slate-200 dark:bg-slate-800 text-sm font-medium text-slate-700 dark:text-slate-300 transition-all duration-300 hover:bg-{{ $item['iconColor'] }}/10 hover:text-{{ $item['iconColor'] }} hover:scale-105 cursor-default">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>

                            <!-- Animated progress bar -->
                            <div class="w-full h-1.5 bg-slate-200 dark:bg-slate-700 rounded-full overflow-hidden mt-4">
                                <div class="h-full bg-gradient-to-r from-{{ $item['iconColor'] }} to-{{ $index === 0 ? 'accent' : 'primary' }} rounded-full transition-all duration-1000"
                                    x-init="$el.style.width = shown ? '100%' : '0%'"
                                    x-transition:enter="transition-all duration-1000 delay-{{ $index === 0 ? '600' : '1000' }} ease-out">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- Custom Animations -->
    <style>
        @keyframes float-slow {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }

        @keyframes float-slower {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-15px) rotate(-5deg);
            }
        }

        @keyframes float-medium {

            0%,
            100% {
                transform: translateY(0px) scale(1);
            }

            50% {
                transform: translateY(-10px) scale(1.2);
            }
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.7;
                transform: scale(0.95);
            }
        }

        @keyframes bounce-slow {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @keyframes rotate-border {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes gradient-text {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        .animate-float-slow {
            animation: float-slow 6s ease-in-out infinite;
        }

        .animate-float-slower {
            animation: float-slower 8s ease-in-out infinite;
        }

        .animate-float-medium {
            animation: float-medium 4s ease-in-out infinite;
        }

        .animate-pulse-slow {
            animation: pulse-slow 3s ease-in-out infinite;
        }

        .animate-bounce-slow {
            animation: bounce-slow 2s ease-in-out infinite;
        }

        .animate-spin-slow {
            animation: spin-slow 4s linear infinite;
            display: inline-block;
        }

        .animate-rotate-border {
            animation: rotate-border 4s linear infinite;
        }

        .animate-gradient-text {
            animation: gradient-text 3s ease-in-out infinite;
        }

        /* Glass effect enhancement */
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .dark .glass {
            background: rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 255, 255, 0.05);
        }

        /* Hover transition for stat cards */
        .group:hover .group-hover\:scale-125 {
            transform: scale(1.25);
        }

        /* Scroll animation for progress bars */
        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
@endsection