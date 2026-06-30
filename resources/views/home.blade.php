@extends('layouts.public')

@section('title', 'Senior Full Stack Laravel Developer & AI Automation Engineer')
@section('meta_description', 'Soufain Najmi is a Full Stack Laravel Developer and AI Automation Engineer. Explore my projects, tutorials, and articles on Laravel, n8n, and web development.')

@section('content')
    <div class="relative overflow-hidden">

        {{-- ===== Coder-Vibe Animated Canvas Background ===== --}}
        <canvas id="coder-canvas" aria-hidden="true"
            style="position:absolute;inset:0;width:100%;height:100%;z-index:-1;pointer-events:none;opacity:0.55;"
        ></canvas>

        {{-- ===== HERO SECTION ===== --}}
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20" aria-label="Introduction">
            <div class="text-center md:text-left flex flex-col md:flex-row items-center gap-12">

                <div class="flex-1 space-y-8 hero-content">
                    {{-- Status Badge --}}
                    <div class="inline-flex items-center rounded-full px-4 py-1.5 text-sm font-semibold text-primary ring-1 ring-primary/20 bg-primary/10 dark:bg-primary/20 dark:ring-primary/30 hover:ring-primary/50 hover:bg-primary/20 hover:-translate-y-1 hover:shadow-lg hover:shadow-primary/20 cursor-default group reveal-up"
                        style="animation-delay:0.1s;">
                        <span class="relative flex h-2.5 w-2.5 mr-2.5">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-primary"></span>
                        </span>
                        <span class="group-hover:scale-105 transition-transform">Available for new projects</span>
                        <span class="ml-2 inline-block transition-transform group-hover:translate-x-1">→</span>
                    </div>

                    {{-- Heading --}}
                    <h1 class="text-5xl md:text-7xl font-bold tracking-tight text-slate-900 dark:text-white reveal-up"
                        style="animation-delay:0.2s;">
                        <span
                            class="inline-block animate-gradient-text bg-gradient-to-r from-primary via-accent to-primary bg-[length:200%_auto] bg-clip-text text-transparent">
                            Hi, I'm Soufain Najmi
                        </span>
                    </h1>

                    {{-- Subtitle --}}
                    <p class="text-xl md:text-2xl text-slate-600 dark:text-slate-300 max-w-2xl font-medium reveal-up"
                        style="animation-delay:0.35s;">
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

                    {{-- Description --}}
                    <p class="text-lg text-slate-500 dark:text-slate-400 max-w-xl mx-auto md:mx-0 leading-relaxed reveal-up"
                        style="animation-delay:0.5s;">
                        I build scalable web applications, automate complex workflows, and integrate AI to solve real-world
                        problems. Welcome to my digital campus.
                    </p>

                    {{-- Call to Actions --}}
                    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start items-center reveal-up"
                        style="animation-delay:0.65s;">

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
                            class="inline-flex items-center justify-center px-8 py-3.5 text-base font-semibold transition-all duration-300 border-2 rounded-xl border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 hover:border-primary hover:text-primary dark:hover:border-primary dark:hover:text-primary hover:-translate-y-1 hover:shadow-lg bg-white/50 dark:bg-slate-800/50 backdrop-blur-sm group relative overflow-hidden">
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

                {{-- Profile Image --}}
                <div class="flex-1 relative w-full max-w-lg mx-auto md:max-w-none hero-image">
                    <div class="aspect-square rounded-2xl overflow-hidden glass p-4 relative group">
                        <div
                            class="absolute -inset-0.5 bg-gradient-to-r from-primary via-accent to-primary rounded-2xl blur-xl opacity-0 group-hover:opacity-70 transition-opacity duration-1000 animate-rotate-border">
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-primary/20 to-accent/20 group-hover:opacity-100 transition-opacity duration-1000">
                        </div>

                        <div
                            class="w-full h-full bg-slate-100 dark:bg-slate-800 rounded-xl relative overflow-hidden flex items-center justify-center">
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

        {{-- ===== STATS SECTION ===== --}}
        <section
            class="relative py-12 md:py-20 border-y border-slate-200 dark:border-slate-800/50 bg-slate-100/50 dark:bg-slate-900/20"
            aria-label="Statistics">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center" id="stats-grid">

                    @php
                        $stats = [
                            ['label' => 'Articles Published', 'count' => 40, 'color' => 'primary', 'icon' => '📝'],
                            ['label' => 'Production Projects', 'count' => 25, 'color' => 'accent', 'icon' => '🚀'],
                            ['label' => 'Core Technologies', 'count' => 15, 'color' => 'primary', 'icon' => '💻'],
                            ['label' => 'Years of Learning', 'count' => 5, 'color' => 'accent', 'icon' => '🎯'],
                        ];
                    @endphp

                    @foreach($stats as $i => $stat)
                        <div class="stat-card p-6 rounded-2xl glass transition-all duration-500 hover:-translate-y-2 group opacity-0"
                            data-target="{{ $stat['count'] }}" style="--stat-delay: {{ $i * 150 }}ms;">
                            <div class="text-3xl mb-2 group-hover:scale-125 transition-transform duration-300 inline-block">
                                {{ $stat['icon'] }}
                            </div>
                            <div
                                class="text-4xl font-bold text-{{ $stat['color'] }} mb-2 group-hover:scale-110 transition-transform duration-300">
                                <span class="stat-number">0</span>+
                            </div>
                            <div
                                class="text-sm font-medium text-slate-500 dark:text-slate-400 group-hover:text-primary transition-colors duration-300">
                                {{ $stat['label'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ===== MOTIVATION SECTION ===== --}}
        <section class="relative py-24 overflow-hidden" id="motivation-section" aria-label="Motivation and Innovation">

            {{-- Background radial glow --}}
            <div class="absolute inset-0 -z-10 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-primary/5 via-transparent to-transparent"
                aria-hidden="true"></div>

            {{-- Animated blobs --}}
            <div class="absolute inset-0 -z-10 overflow-hidden pointer-events-none" aria-hidden="true">
                <div class="absolute top-20 left-10 w-64 h-64 bg-primary/5 rounded-full blur-3xl animate-float-slow"></div>
                <div class="absolute bottom-20 right-10 w-96 h-96 bg-accent/5 rounded-full blur-3xl animate-float-slower">
                </div>
                <div class="absolute top-1/2 left-1/2 w-48 h-48 bg-primary/3 rounded-full blur-2xl animate-float-medium"
                    style="animation-delay:1s;"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                {{-- Section Header --}}
                <div class="text-center max-w-3xl mx-auto mb-16 motivation-header opacity-0">
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

                {{-- Motivation Items --}}
                <div class="space-y-24">

                    @php
                        $motivationItems = [
                            [
                                'image' => 'm1.png',
                                'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
                                'title' => 'Continuous Learning',
                                'description' => 'The tech landscape is ever-evolving, and my passion lies in adapting and mastering new tools. From building robust backend architectures with Laravel to integrating intelligent AI pipelines. Technology isn\'t just my career, it\'s my craft.',
                                'tags' => ['Growth Mindset', 'Curiosity', 'Adaptability'],
                                'iconColor' => 'primary',
                                'gradientTo' => 'accent',
                                'emoji' => '📚',
                                'direction' => 'normal',
                            ],
                            [
                                'image' => 'm2.png',
                                'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
                                'title' => 'Sharing Knowledge',
                                'description' => 'Through <strong class="text-primary dark:text-accent font-semibold">Najmi Academy</strong>, I aim to empower others by breaking down complex concepts into actionable tutorials. Building a community of developers and innovators is what truly drives my daily motivation.',
                                'tags' => ['Mentoring', 'Community', 'Education'],
                                'iconColor' => 'accent',
                                'gradientTo' => 'primary',
                                'emoji' => '🎓',
                                'direction' => 'reverse',
                            ],
                        ];
                    @endphp

                    @foreach($motivationItems as $index => $item)
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16 items-center motivation-item opacity-0"
                            data-direction="{{ $item['direction'] }}">

                            {{-- Image --}}
                            <div
                                class="relative group {{ $item['direction'] === 'reverse' ? 'md:order-2' : '' }} motivation-img">
                                <div
                                    class="absolute -inset-1 bg-gradient-to-r from-{{ $item['iconColor'] }} to-{{ $item['gradientTo'] }} rounded-2xl blur opacity-25 group-hover:opacity-70 transition-all duration-700 group-hover:scale-105">
                                </div>
                                <div
                                    class="relative rounded-2xl overflow-hidden glass shadow-2xl ring-1 ring-white/10 dark:ring-white/5">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black/60 z-10">
                                    </div>
                                    <img src="{{ asset('build/assets/' . $item['image']) }}" alt="{{ $item['title'] }}"
                                        class="w-full h-auto object-cover transform transition-all duration-700 group-hover:scale-110"
                                        loading="lazy" decoding="async">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-{{ $item['iconColor'] }}/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-5">
                                    </div>
                                    <div class="absolute bottom-4 left-4 z-20 flex gap-2">
                                        <span
                                            class="px-3 py-1 bg-black/50 backdrop-blur-sm rounded-full text-xs text-white font-medium">
                                            {{ $item['emoji'] }} {{ $item['title'] }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            {{-- Text --}}
                            <div class="space-y-6 {{ $item['direction'] === 'reverse' ? 'md:order-1' : '' }} motivation-text">
                                <h3
                                    class="text-2xl md:text-3xl font-bold text-slate-800 dark:text-slate-100 flex items-center gap-4">
                                    <span
                                        class="flex items-center justify-center w-14 h-14 rounded-xl bg-{{ $item['iconColor'] }}/10 text-{{ $item['iconColor'] }} shadow-inner relative flex-shrink-0">
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
                                            class="absolute -bottom-1 left-0 w-full h-0.5 bg-gradient-to-r from-{{ $item['iconColor'] }} to-transparent rounded-full scale-x-0 origin-left transition-transform duration-700 motivation-underline"></span>
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

                                {{-- Animated progress bar --}}
                                <div class="w-full h-1.5 bg-slate-200 dark:bg-slate-700 rounded-full overflow-hidden mt-4">
                                    <div
                                        class="motivation-bar h-full bg-gradient-to-r from-{{ $item['iconColor'] }} to-{{ $item['gradientTo'] }} rounded-full w-0 transition-all duration-1000 ease-out">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    {{-- ===== STYLES ===== --}}
    <style>
        /* ---- Keyframes ---- */
        @keyframes float-slow {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }

        @keyframes float-slower {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-15px) rotate(-5deg);
            }
        }

        @keyframes float-medium {

            0%,
            100% {
                transform: translateY(0) scale(1);
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

        @keyframes reveal-up {
            from {
                opacity: 0;
                transform: translateY(28px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes particle-float {
            0% {
                transform: translateY(0) scale(1);
                opacity: 0.3;
            }

            50% {
                transform: translateY(-30px) scale(1.3);
                opacity: 0.7;
            }

            100% {
                transform: translateY(0) scale(1);
                opacity: 0.3;
            }
        }

        @keyframes slide-in-left {
            from {
                opacity: 0;
                transform: translateX(-40px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slide-in-right {
            from {
                opacity: 0;
                transform: translateX(40px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fade-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ---- Utility classes ---- */
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

        /* ---- Hero entrance ---- */
        .hero-content {
            animation: reveal-up 0.9s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        .hero-image {
            animation: slide-in-right 1s 0.4s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        /* ---- Reveal-up helper (for individual children) ---- */
        .reveal-up {
            animation: reveal-up 0.8s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        /* ---- Floating particle dots ---- */
        .particle {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.35), rgba(56, 189, 248, 0.15));
            animation: particle-float 7s ease-in-out infinite;
        }

        /* ---- Glass ---- */
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

        /* ---- Stats ---- */
        .stat-card {
            transition: opacity 0.6s ease, transform 0.6s ease;
            transform: translateY(20px);
        }

        .stat-card.animated {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        /* ---- Motivation section ---- */
        .motivation-header {
            transition: opacity 0.9s ease, transform 0.9s ease;
            transform: translateY(24px);
        }

        .motivation-header.animated {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        .motivation-item {
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .motivation-item[data-direction="normal"] {
            transform: translateX(-30px);
        }

        .motivation-item[data-direction="reverse"] {
            transform: translateX(30px);
        }

        .motivation-item.animated {
            opacity: 1 !important;
            transform: translateX(0) !important;
        }

        .motivation-item.animated .motivation-underline {
            transform: scaleX(1);
            transition-delay: 0.6s;
        }

        .motivation-item.animated .motivation-bar {
            width: 100% !important;
        }

        /* ---- Scroll transition fix ---- */
        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* ---- Scroll transition fix ------------------------------------------------------ */
    </style>

    {{-- ===== SCROLL-REVEAL SCRIPTS ===== --}}
    @push('scripts')
        <script>
            (function () {
                // ---- Stat counter ----
                function animateCounter(el, target) {
                    let count = 0;
                    const step = Math.max(1, Math.ceil(target / 50));
                    const interval = setInterval(() => {
                        count = Math.min(count + step, target);
                        el.textContent = count;
                        if (count >= target) clearInterval(interval);
                    }, 40);
                }

                // ---- IntersectionObserver factory ----
                function observe(selector, onVisible, options = {}) {
                    const elements = document.querySelectorAll(selector);
                    if (!elements.length) return;
                    const io = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                onVisible(entry.target);
                                io.unobserve(entry.target);
                            }
                        });
                    }, { threshold: 0.15, ...options });
                    elements.forEach(el => io.observe(el));
                }

                // ---- Stat cards ----
                observe('.stat-card', (card) => {
                    const delay = parseInt(card.style.getPropertyValue('--stat-delay')) || 0;
                    setTimeout(() => {
                        card.classList.add('animated');
                        const numEl = card.querySelector('.stat-number');
                        const target = parseInt(card.dataset.target, 10);
                        if (numEl && target) animateCounter(numEl, target);
                    }, delay);
                }, { threshold: 0.2 });

                // ---- Motivation header ----
                observe('.motivation-header', (el) => {
                    el.classList.add('animated');
                }, { threshold: 0.1 });

                // ---- Motivation items ----
                observe('.motivation-item', (item) => {
                    item.classList.add('animated');
                }, { threshold: 0.15 });

            })();
        </script>

        {{-- ===== CODER-VIBE CANVAS SCRIPT ===== --}}
        <script>
        (function () {
            const canvas = document.getElementById('coder-canvas');
            if (!canvas) return;
            const ctx = canvas.getContext('2d');

            /* ── Palette ─────────────────────────────────────────── */
            const COLORS = {
                codeFall  : ['#00ff41', '#00e5cc', '#7c3aed', '#0066ff'],
                dataLine  : '#0066ff',
                orbit     : '#00e5cc',
                orbitDot  : '#ff6b35',
                progress  : '#7c3aed',
                bg        : 'rgba(10, 14, 26, 0)',   // fully transparent – we overlay only
            };

            /* ── Resize ───────────────────────────────────────────── */
            function resize() {
                canvas.width  = canvas.offsetWidth  * window.devicePixelRatio;
                canvas.height = canvas.offsetHeight * window.devicePixelRatio;
                ctx.scale(window.devicePixelRatio, window.devicePixelRatio);
                init();
            }
            const W = () => canvas.width  / window.devicePixelRatio;
            const H = () => canvas.height / window.devicePixelRatio;

            /* ═══════════════════════════════════════════════════════
               1. CODE-FALL (Matrix columns)
            ═══════════════════════════════════════════════════════ */
            const CODE_CHARS = '{}[]()=>;<>/\\!?|&%$#@~^*+: 0123456789abcdfABCDF';
            const COL_SIZE   = 18;   // px per column / char
            let columns = [];

            function initColumns() {
                const cols = Math.floor(W() / COL_SIZE);
                columns = Array.from({ length: cols }, (_, i) => ({
                    x      : i * COL_SIZE + COL_SIZE / 2,
                    y      : Math.random() * -H(),          // start above viewport
                    speed  : 0.4 + Math.random() * 1.1,
                    chars  : Array.from({ length: 8 + Math.floor(Math.random() * 14) },
                               () => CODE_CHARS[Math.floor(Math.random() * CODE_CHARS.length)]),
                    color  : COLORS.codeFall[Math.floor(Math.random() * COLORS.codeFall.length)],
                    opacity: 0.04 + Math.random() * 0.08,
                    ttl    : 0,
                    maxTtl : 120 + Math.floor(Math.random() * 120),
                }));
            }

            function drawColumns() {
                columns.forEach(col => {
                    col.ttl++;
                    // periodically swap a random char
                    if (Math.random() < 0.07) {
                        const idx = Math.floor(Math.random() * col.chars.length);
                        col.chars[idx] = CODE_CHARS[Math.floor(Math.random() * CODE_CHARS.length)];
                    }
                    col.y += col.speed;
                    if (col.y > H() + COL_SIZE * col.chars.length || col.ttl > col.maxTtl) {
                        col.y     = Math.random() * -H() * 0.5;
                        col.speed = 0.4 + Math.random() * 1.1;
                        col.ttl   = 0;
                        col.maxTtl = 120 + Math.floor(Math.random() * 120);
                        col.color = COLORS.codeFall[Math.floor(Math.random() * COLORS.codeFall.length)];
                    }
                    ctx.save();
                    ctx.font      = `${COL_SIZE - 3}px 'JetBrains Mono', 'Fira Code', monospace`;
                    ctx.textAlign = 'center';
                    col.chars.forEach((ch, i) => {
                        const fade = 1 - i / col.chars.length;         // brightest at top
                        ctx.globalAlpha = col.opacity * fade;
                        ctx.fillStyle   = i === 0 ? '#ffffff' : col.color;  // head char = white flash
                        ctx.fillText(ch, col.x, col.y - i * COL_SIZE);
                    });
                    ctx.restore();
                });
            }

            /* ═══════════════════════════════════════════════════════
               2. HORIZONTAL DATA LINES (log streams)
            ═══════════════════════════════════════════════════════ */
            const NUM_LINES = 6;
            let dataLines = [];

            function initDataLines() {
                dataLines = Array.from({ length: NUM_LINES }, () => createDataLine());
                // stagger them
                dataLines.forEach((l, i) => { l.progress = (i / NUM_LINES); });
            }

            function createDataLine() {
                const segments = 3 + Math.floor(Math.random() * 4);
                return {
                    y       : 60  + Math.random() * (H() - 120),
                    progress: 0,
                    speed   : 0.0015 + Math.random() * 0.003,
                    opacity : 0.06 + Math.random() * 0.09,
                    width   : 0.3 + Math.random() * 0.4,  // fraction of W()
                    segments,
                    label   : randomLabel(),
                };
            }

            const LOG_PREFIXES = ['INFO  ','DEBUG ','WARN  ','  GET ','  200 ',' EXEC ','QUEUE ','EVENT '];
            const LOG_BODIES   = [
                'Illuminate\\Http\\Request@handle',
                'App\\Http\\Controllers\\HomeController',
                'n8n-workflow: node executed',
                'AI pipeline: tokens_used=1024',
                'Redis::set(cache_key, ttl=3600)',
                'SELECT * FROM posts LIMIT 10',
                'Broadcast event dispatched',
                'Queue job processed in 38ms',
            ];
            function randomLabel() {
                return LOG_PREFIXES[Math.floor(Math.random() * LOG_PREFIXES.length)]
                     + LOG_BODIES[Math.floor(Math.random() * LOG_BODIES.length)];
            }

            function drawDataLines() {
                dataLines.forEach(dl => {
                    dl.progress += dl.speed;
                    if (dl.progress > 1.15) {
                        Object.assign(dl, createDataLine());
                        dl.progress = 0;
                    }
                    const x0  = 0;
                    const x1  = W() * dl.width;
                    const xNow = Math.min(dl.progress / 1.0, 1) * x1;

                    ctx.save();
                    ctx.globalAlpha = dl.opacity;

                    // Main line
                    ctx.beginPath();
                    ctx.moveTo(x0, dl.y);
                    ctx.lineTo(xNow, dl.y);
                    ctx.strokeStyle = COLORS.dataLine;
                    ctx.lineWidth   = 1;
                    ctx.stroke();

                    // Glow dot at head
                    const grad = ctx.createRadialGradient(xNow, dl.y, 0, xNow, dl.y, 8);
                    grad.addColorStop(0, COLORS.dataLine);
                    grad.addColorStop(1, 'transparent');
                    ctx.globalAlpha = dl.opacity * 2.5;
                    ctx.beginPath();
                    ctx.arc(xNow, dl.y, 4, 0, Math.PI * 2);
                    ctx.fillStyle = grad;
                    ctx.fill();

                    // Label text
                    ctx.globalAlpha = dl.opacity * 0.55;
                    ctx.font        = '10px monospace';
                    ctx.fillStyle   = COLORS.dataLine;
                    ctx.textAlign   = 'left';
                    ctx.fillText(dl.label, 8, dl.y - 4);

                    ctx.restore();
                });
            }

            /* ═══════════════════════════════════════════════════════
               3. ORBITAL RINGS (processes)
            ═══════════════════════════════════════════════════════ */
            const ORBITS = [
                { cx: 0.82, cy: 0.22, r: 60,  speed: 0.008,  dotR: 3, angle: 0, opacity: 0.12 },
                { cx: 0.12, cy: 0.70, r: 45,  speed: -0.006, dotR: 2.5, angle: 1, opacity: 0.09 },
                { cx: 0.90, cy: 0.72, r: 80,  speed: 0.005,  dotR: 4, angle: 2, opacity: 0.07 },
                { cx: 0.50, cy: 0.10, r: 35,  speed: -0.012, dotR: 2, angle: 3, opacity: 0.10 },
            ];

            function drawOrbits() {
                ORBITS.forEach(o => {
                    o.angle += o.speed;
                    const cx = o.cx * W();
                    const cy = o.cy * H();

                    // Ring
                    ctx.save();
                    ctx.globalAlpha   = o.opacity;
                    ctx.beginPath();
                    ctx.arc(cx, cy, o.r, 0, Math.PI * 2);
                    ctx.strokeStyle   = COLORS.orbit;
                    ctx.lineWidth     = 0.6;
                    ctx.setLineDash([4, 8]);
                    ctx.stroke();
                    ctx.setLineDash([]);

                    // Orbiting dot
                    const dx = cx + Math.cos(o.angle) * o.r;
                    const dy = cy + Math.sin(o.angle) * o.r;
                    ctx.globalAlpha   = o.opacity * 3;
                    ctx.beginPath();
                    ctx.arc(dx, dy, o.dotR, 0, Math.PI * 2);
                    ctx.fillStyle     = COLORS.orbitDot;
                    ctx.shadowBlur    = 8;
                    ctx.shadowColor   = COLORS.orbitDot;
                    ctx.fill();
                    ctx.shadowBlur    = 0;
                    ctx.restore();
                });
            }

            /* ═══════════════════════════════════════════════════════
               4. PROGRESS BAR – footer strip
            ═══════════════════════════════════════════════════════ */
            let progOffset = 0;

            function drawProgress() {
                progOffset = (progOffset + 0.4) % W();
                const y  = H() - 3;
                const bw = W() * 0.35;  // bar segment width

                ctx.save();
                ctx.globalAlpha = 0.18;

                // Track
                ctx.beginPath();
                ctx.moveTo(0, y);
                ctx.lineTo(W(), y);
                ctx.strokeStyle = COLORS.progress;
                ctx.lineWidth   = 1;
                ctx.stroke();

                // Moving fill segment
                const x0 = (progOffset - bw + W()) % W();
                const x1 = progOffset;
                ctx.globalAlpha = 0.35;

                if (x1 > x0) {
                    const g = ctx.createLinearGradient(x0, y, x1, y);
                    g.addColorStop(0, 'transparent');
                    g.addColorStop(0.4, COLORS.progress);
                    g.addColorStop(1, 'transparent');
                    ctx.beginPath();
                    ctx.moveTo(x0, y);
                    ctx.lineTo(x1, y);
                    ctx.strokeStyle = g;
                    ctx.lineWidth   = 3;
                    ctx.stroke();
                } else {
                    // wrapped — draw two segments
                    [[0, x1], [x0, W()]].forEach(([a, b]) => {
                        ctx.beginPath();
                        ctx.moveTo(a, y);
                        ctx.lineTo(b, y);
                        ctx.strokeStyle = COLORS.progress;
                        ctx.lineWidth   = 3;
                        ctx.stroke();
                    });
                }
                ctx.restore();
            }

            /* ── Master init ──────────────────────────────────────── */
            function init() {
                initColumns();
                initDataLines();
            }

            /* ── Render loop ──────────────────────────────────────── */
            function draw() {
                ctx.clearRect(0, 0, W(), H());
                drawOrbits();
                drawColumns();
                drawDataLines();
                drawProgress();
                requestAnimationFrame(draw);
            }

            /* ── Boot ─────────────────────────────────────────────── */
            window.addEventListener('resize', () => {
                clearTimeout(window._coderResizeTimer);
                window._coderResizeTimer = setTimeout(resize, 200);
            });
            resize();
            draw();

            /* ── Respect prefers-reduced-motion ──────────────────── */
            if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                canvas.style.display = 'none';
            }
        })();
        </script>
    @endpush
@endsection