<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        // For actual implementation when DB is active
        // $query = Article::where('is_published', true)->with('category', 'tags');
        
        // if ($request->has('category')) {
        //     $query->whereHas('category', function ($q) use ($request) {
        //         $q->where('slug', $request->category);
        //     });
        // }
        // if ($request->has('search')) {
        //     $query->where('title', 'like', '%' . $request->search . '%');
        // }
        // $articles = $query->latest()->paginate(9);
        // $categories = Category::all();

        // Returning mocked array to prevent DB errors until user migrates
        $articles = [
            (object)[
                'title' => 'Mastering API Development in Laravel 12',
                'slug' => 'mastering-api-development-laravel-12',
                'excerpt' => 'Learn how to build robust, scalable APIs with Laravel 12 using API Resources, Sanctum and more.',
                'image' => null,
                'category' => (object)['name' => 'Laravel', 'color' => 'red'],
                'reading_time' => 8,
                'created_at' => now()->subDays(2),
            ],
            (object)[
                'title' => 'Automate your life with n8n and AI',
                'slug' => 'automate-life-n8n-ai',
                'excerpt' => 'A complete guide to connecting Gmail, Google Sheets, and OpenAI using n8n for personal automation.',
                'image' => null,
                'category' => (object)['name' => 'n8n', 'color' => 'orange'],
                'reading_time' => 12,
                'created_at' => now()->subDays(5),
            ]
        ];

        $categories = [
            (object)['name' => 'Laravel', 'slug' => 'laravel'],
            (object)['name' => 'PHP', 'slug' => 'php'],
            (object)['name' => 'n8n', 'slug' => 'n8n'],
            (object)['name' => 'AI', 'slug' => 'ai'],
        ];

        return view('blog.index', compact('articles', 'categories'));
    }

    public function show($slug)
    {
        // $article = Article::where('slug', $slug)->with('category', 'tags', 'comments.user')->firstOrFail();
        // $article->increment('views');

        // Mocking
        $article = (object)[
            'title' => 'Mastering API Development in Laravel 12',
            'slug' => 'mastering-api-development-laravel-12',
            'content' => '<p>This is a long article content...</p>',
            'image' => null,
            'category' => (object)['name' => 'Laravel', 'color' => 'red'],
            'reading_time' => 8,
            'views' => 1432,
            'user' => (object)['name' => 'Soufain Najmi', 'title' => 'Full Stack Developer'],
            'created_at' => now()->subDays(2),
            'tags' => [(object)['name' => 'API'], (object)['name' => 'Backend']],
            'comments' => []
        ];

        return view('blog.show', compact('article'));
    }
}
