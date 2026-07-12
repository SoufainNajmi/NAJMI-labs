<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogAdminController extends Controller
{
    public function index()
    {
        $articles = Article::with('category')->latest()->paginate(10);
        return view('admin.blog.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.blog.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'reading_time' => 'required|integer',
        ]);

        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->input('content'),
            'category_id' => $request->category_id,
            'reading_time' => $request->reading_time,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Article created successfully.');
    }

    public function edit(Article $blog)
    {
        $categories = Category::all();
        return view('admin.blog.edit', ['article' => $blog, 'categories' => $categories]);
    }

    public function update(Request $request, Article $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'reading_time' => 'required|integer',
        ]);

        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->input('content'),
            'category_id' => $request->category_id,
            'reading_time' => $request->reading_time,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Article deleted successfully.');
    }
}
