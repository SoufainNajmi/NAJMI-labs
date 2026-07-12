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

                    {{-- Typewriter Subtitle --}}
                    <div class="text-xl md:text-2xl text-slate-600 dark:text-slate-300 max-w-2xl font-medium reveal-up"
                        style="animation-delay:0.35s; min-height: 4rem;">
                        <span class="block relative">
                            <span class="inline-block animate-pulse-slow text-primary/80 dark:text-primary/90 mr-2">✦</span>
                            <span id="typewriter-text" class="inline-block border-r-2 border-primary/60 pr-1"></span>
                        </span>
                    </div>

                    {{-- Description --}}
                    <p class="text-lg text-slate-500 dark:text-slate-400 max-w-xl mx-auto md:mx-0 leading-relaxed reveal-up"
                        style="animation-delay:0.5s;">
                        I build scalable web applications, automate complex workflows, and integrate AI to solve real-world
                        problems. Welcome to my digital campus.
                    </p>

                    {{-- Technology Badges --}}
                    <div class="flex flex-wrap justify-center md:justify-start gap-2 reveal-up" style="animation-delay:0.6s;">
                        <span class="px-3 py-1 text-sm rounded-full bg-primary/10 text-primary border border-primary/20">Laravel</span>
                        <span class="px-3 py-1 text-sm rounded-full bg-accent/10 text-accent border border-accent/20">n8n make </span>
                        <span class="px-3 py-1 text-sm rounded-full bg-indigo-500/10 text-indigo-500 border border-indigo-500/20">AI automation </span>
                        <span class="px-3 py-1 text-sm rounded-full bg-emerald-500/10 text-emerald-500 border border-emerald-500/20">Python php </span>
                        <span class="px-3 py-1 text-sm rounded-full bg-amber-500/10 text-amber-500 border border-amber-500/20">Docker </span>
                        <span class="px-3 py-1 text-sm rounded-full bg-rose-500/10 text-rose-500 border border-rose-500/20">HTML CSS JavaScript</span>
                    </div>

                    {{-- Call to Actions --}}
                    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start items-center reveal-up"
                        style="animation-delay:0.7s;">

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

                    {{-- Scroll indicator --}}
                    <div class="flex justify-center md:justify-start mt-4 reveal-up" style="animation-delay:0.85s;">
                        <a href="#stats-section" class="text-slate-400 dark:text-slate-500 hover:text-primary dark:hover:text-accent transition-colors duration-300 animate-bounce-slow" aria-label="Scroll down">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===== STATS SECTION ===== --}}
<section id="stats-section"
    class="relative py-12 md:py-20 border-y border-slate-200 dark:border-slate-800/50 bg-slate-100/50 dark:bg-slate-900/20"
    aria-label="Statistics">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center" id="stats-grid">

            @php
                $stats = [
                    [
                        'label' => 'Articles Published',
                        'count' => 40,
                        'color' => 'primary',
                        'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>'
                    ],
                    [
                        'label' => 'Production Projects',
                        'count' => 25,
                        'color' => 'accent',
                        'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" /></svg>'
                    ],
                    [
                        'label' => 'Core Technologies',
                        'count' => 15,
                        'color' => 'primary',
                        'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.5 3.75H6a2.25 2.25 0 00-2.25 2.25v1.5M16.5 3.75H18a2.25 2.25 0 012.25 2.25v1.5m0 8.25v1.5a2.25 2.25 0 01-2.25 2.25h-1.5m-9 0H6a2.25 2.25 0 01-2.25-2.25v-1.5m-3-3h1.5m12.75 0h1.5M3.75 12h1.5m12.75 0h1.5M12 3.75v1.5m0 12.75v1.5M12 6a.75.75 0 100 1.5.75.75 0 000-1.5zm0 4.5a.75.75 0 100 1.5.75.75 0 000-1.5zm0 4.5a.75.75 0 100 1.5.75.75 0 000-1.5z" /></svg>'
                    ],
                    [
                        'label' => 'Years of Learning',
                        'count' => 5,
                        'color' => 'accent',
                        'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zM14.25 15h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-2.25h.008v.008H16.5V15zm0 2.25h.008v.008H16.5v-.008z" /></svg>'
                    ],
                ];
            @endphp

            @foreach($stats as $i => $stat)
                <div class="stat-card p-6 rounded-2xl glass transition-all duration-500 hover:-translate-y-2 group opacity-0"
                    data-target="{{ $stat['count'] }}" style="--stat-delay: {{ $i * 150 }}ms;">
                    {{-- Icon container with color class --}}
                    <div class="flex justify-center mb-2 text-{{ $stat['color'] }} group-hover:scale-125 transition-transform duration-300">
                        {!! $stat['icon'] !!}
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

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        @keyframes blink-caret {
            from, to { border-color: transparent; }
            50% { border-color: currentColor; }
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
    </style>

    {{-- ===== SCRIPTS ===== --}}
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

                // ---- Typewriter effect ----
                const roles = [
                    'Full Stack Laravel Developer',
                    'AI Automation Engineer',
                    'n8n Workflow Developer',
                    'Open‑Source Enthusiast',
                    'NAJMI ACADEMY'
                ];
                let roleIndex = 0;
                let charIndex = 0;
                let isDeleting = false;
                const typewriterEl = document.getElementById('typewriter-text');

                function typeEffect() {
                    if (!typewriterEl) return;
                    const currentText = roles[roleIndex];
                    if (!isDeleting) {
                        typewriterEl.textContent = currentText.substring(0, charIndex + 1);
                        charIndex++;
                        if (charIndex === currentText.length) {
                            isDeleting = true;
                            setTimeout(typeEffect, 2000);
                            return;
                        }
                        setTimeout(typeEffect, 80);
                    } else {
                        typewriterEl.textContent = currentText.substring(0, charIndex - 1);
                        charIndex--;
                        if (charIndex === 0) {
                            isDeleting = false;
                            roleIndex = (roleIndex + 1) % roles.length;
                            setTimeout(typeEffect, 400);
                            return;
                        }
                        setTimeout(typeEffect, 40);
                    }
                }

                // Start typewriter after a small delay
                setTimeout(typeEffect, 1000);

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
