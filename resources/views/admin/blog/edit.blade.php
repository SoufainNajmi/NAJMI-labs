@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto space-y-6">
    <div>
        <a href="{{ route('admin.blog.index') }}" class="text-slate-500 hover:text-slate-800 dark:hover:text-white text-sm flex items-center gap-1 mb-2">&larr; Back to articles</a>
        <h1 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white">Edit Blog Article</h1>
    </div>

    <!-- Form Card -->
    <div class="glass p-6 rounded-2xl">
        <form action="{{ route('admin.blog.update', $article->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PATCH')
            
            <div>
                <label for="title" class="block text-sm font-medium text-slate-500 mb-1">Title</label>
                <input type="text" name="title" id="title" required value="{{ old('title', $article->title) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary text-slate-900 dark:text-white">
                @error('title') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="category_id" class="block text-sm font-medium text-slate-500 mb-1">Category</label>
                <select name="category_id" id="category_id" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary text-slate-900 dark:text-white">
                    <option value="">Select a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="reading_time" class="block text-sm font-medium text-slate-500 mb-1">Reading Time (Minutes)</label>
                <input type="number" name="reading_time" id="reading_time" required min="1" value="{{ old('reading_time', $article->reading_time) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary text-slate-900 dark:text-white">
                @error('reading_time') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="content" class="block text-sm font-medium text-slate-500 mb-1">Content</label>
                <textarea name="content" id="content" required rows="10" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary text-slate-900 dark:text-white font-sans">{{ old('content', $article->content) }}</textarea>
                @error('content') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="pt-4 flex justify-end gap-3">
                <a href="{{ route('admin.blog.index') }}" class="px-4 py-2 bg-slate-100 hover:bg-slate-250 dark:bg-slate-800 dark:hover:bg-slate-700 rounded-xl text-sm font-medium transition-all">Cancel</a>
                <button type="submit" class="btn-primary">Update Article</button>
            </div>
        </form>
    </div>
</div>
@endsection
