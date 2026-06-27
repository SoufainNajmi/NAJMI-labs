@extends('layouts.public')

@section('title', 'Contact Me')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
    <div class="max-w-3xl mx-auto text-center mb-16">
        <h1 class="text-4xl mx-auto md:text-5xl font-bold tracking-tight text-slate-900 dark:text-white mb-4">
            Get In <span class="text-primary">Touch</span>
        </h1>
        <p class="text-xl text-slate-600 dark:text-slate-400">
            Have a project in mind, want to collaborate, or just want to say hi? I'd love to hear from you.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-5xl mx-auto">
        
        <!-- Contact Info -->
        <div class="space-y-8">
            <h3 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white mb-6">Contact Information</h3>
            
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Email</h4>
                    <p class="text-slate-600 dark:text-slate-400">contact@najmiacademy.test</p>
                    <a href="mailto:contact@najmiacademy.test" class="text-primary text-sm hover:underline mt-1 inline-block">Send an email -></a>
                </div>
            </div>
            
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-lg bg-[#25D366]/10 text-[#25D366] flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-slate-900 dark:text-white">WhatsApp</h4>
                    <p class="text-slate-600 dark:text-slate-400">+1 234 567 890</p>
                    <a href="#" class="text-[#25D366] text-sm hover:underline mt-1 inline-block">Message me -></a>
                </div>
            </div>

            <!-- Google Maps Placeholder -->
            <div class="w-full h-48 bg-slate-200 dark:bg-slate-800 rounded-xl overflow-hidden relative mt-8 flex items-center justify-center border border-slate-300 dark:border-slate-700">
                <p class="text-slate-500 text-sm font-medium">Google Map Placeholder</p>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="glass p-8 md:p-10 rounded-2xl">
            <h3 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white mb-6">Send a Message</h3>
            
            @if(session('success'))
                <div class="bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 p-4 rounded-md mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Name</label>
                    <input type="text" name="name" id="name" required class="w-full rounded-md border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white focus:ring-primary focus:border-primary shadow-sm">
                    @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Email</label>
                    <input type="email" name="email" id="email" required class="w-full rounded-md border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white focus:ring-primary focus:border-primary shadow-sm">
                    @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                
                <div>
                    <label for="subject" class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Subject</label>
                    <input type="text" name="subject" id="subject" required class="w-full rounded-md border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white focus:ring-primary focus:border-primary shadow-sm">
                    @error('subject') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                
                <div>
                    <label for="message" class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Message</label>
                    <textarea name="message" id="message" rows="5" required class="w-full rounded-md border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white focus:ring-primary focus:border-primary shadow-sm"></textarea>
                    @error('message') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                
                <button type="submit" class="w-full btn-primary py-3 text-base">
                    Send Message
                </button>
            </form>
        </div>
        
    </div>
</div>
@endsection
