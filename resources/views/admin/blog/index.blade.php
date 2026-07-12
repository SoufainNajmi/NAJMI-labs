@extends('layouts.admin')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white">Blog Articles</h1>
            <p class="text-slate-500 text-sm mt-1">Manage, edit, or write new blog posts.</p>
        </div>
        <a href="{{ route('admin.blog.create') }}" class="btn-primary">Add New Post</a>
    </div>

    <!-- Table Card -->
    <div class="glass rounded-2xl overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-slate-200 dark:border-slate-800 text-xs font-semibold text-slate-500 uppercase bg-slate-50/50 dark:bg-slate-900/50">
                    <th class="px-6 py-4">Title</th>
                    <th class="px-6 py-4">Category</th>
                    <th class="px-6 py-4">Reading Time</th>
                    <th class="px-6 py-4">Published At</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-800 text-sm">
                @forelse($articles as $article)
                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-900/50 transition-colors">
                        <td class="px-6 py-4 font-semibold text-slate-900 dark:text-white">{{ $article->title }}</td>
                        <td class="px-6 py-4">
                            <span class="inline-block px-2.5 py-1 rounded-full text-xs font-semibold bg-primary/10 text-primary">
                                {{ $article->category->name ?? 'Uncategorized' }}
                            </span>
                        </td>
                        <td class="px-6 py-4">{{ $article->reading_time }} mins</td>
                        <td class="px-6 py-4 text-slate-500">{{ $article->created_at->format('M d, Y') }}</td>
                        <td class="px-6 py-4 text-right space-x-2">
                            <a href="{{ route('admin.blog.edit', $article->id) }}" class="text-primary hover:underline font-medium">Edit</a>
                            <form action="{{ route('admin.blog.destroy', $article->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this article?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-rose-500 hover:underline font-medium">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center text-slate-500">
                            No articles found. Write your first blog post!
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex justify-end">
        {{ $articles->links() }}
    </div>
</div>
@endsection
