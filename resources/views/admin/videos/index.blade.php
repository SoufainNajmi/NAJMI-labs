@extends('layouts.admin')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white">Video Tutorials</h1>
            <p class="text-slate-500 text-sm mt-1">Manage or upload video links for tutorials.</p>
        </div>
        <a href="{{ route('admin.videos.create') }}" class="btn-primary">Add New Video</a>
    </div>

    <!-- Table Card -->
    <div class="glass rounded-2xl overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-slate-200 dark:border-slate-800 text-xs font-semibold text-slate-500 uppercase bg-slate-50/50 dark:bg-slate-900/50">
                    <th class="px-6 py-4">Title</th>
                    <th class="px-6 py-4">Video Link/Filename</th>
                    <th class="px-6 py-4">Description</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-800 text-sm">
                @forelse($videos as $video)
                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-900/50 transition-colors">
                        <td class="px-6 py-4 font-semibold text-slate-900 dark:text-white">{{ $video->title }}</td>
                        <td class="px-6 py-4 text-slate-500 font-mono text-xs">{{ $video->filename }}</td>
                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400 line-clamp-1 max-w-xs">{{ $video->description ?? 'No description.' }}</td>
                        <td class="px-6 py-4 text-right space-x-2">
                            <form action="{{ route('admin.videos.destroy', $video->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this video?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-rose-500 hover:underline font-medium">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-12 text-center text-slate-500">
                            No videos found. Upload your first tutorial video link!
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex justify-end">
        {{ $videos->links() }}
    </div>
</div>
@endsection
