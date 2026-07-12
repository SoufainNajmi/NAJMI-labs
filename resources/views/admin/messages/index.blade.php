@extends('layouts.admin')

@section('content')
<div class="space-y-6">
    <div>
        <h1 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white">Messages Received</h1>
        <p class="text-slate-500 text-sm mt-1">Review contact inquiries submittals from clients and readers.</p>
    </div>

    <!-- Messages Container -->
    <div class="space-y-4">
        @forelse($messages as $message)
            <div class="glass p-6 rounded-2xl flex flex-col md:flex-row justify-between items-start md:items-center gap-4 transition-all">
                <div class="space-y-1">
                    <div class="flex items-center gap-3">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">{{ $message->subject }}</h3>
                        <span class="text-xs text-slate-500 bg-slate-100 dark:bg-slate-800 px-2 py-0.5 rounded">{{ $message->created_at->diffForHumans() }}</span>
                    </div>
                    <div class="text-sm font-medium text-slate-600 dark:text-slate-400">
                        From: <span class="text-slate-800 dark:text-slate-200">{{ $message->name }}</span> (&lt;{{ $message->email }}&gt;)
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 mt-3 text-sm leading-relaxed whitespace-pre-line">{{ $message->body }}</p>
                </div>
                <div class="flex items-center gap-2">
                    <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 border border-rose-500/20 text-rose-500 hover:bg-rose-500 hover:text-white text-xs font-semibold rounded-xl transition-all">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="glass p-12 text-center text-slate-500 rounded-2xl">
                No messages received yet.
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex justify-end">
        {{ $messages->links() }}
    </div>
</div>
@endsection
