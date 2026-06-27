<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // $projects = Project::latest()->get();

        // Mock data
        $projects = [
            (object)[
                'title' => 'Personal Blog Laravel',
                'slug' => 'personal-blog-laravel',
                'description' => 'A complete personal blog and portfolio developed with Laravel 12, Tailwind CSS, AlpineJS.',
                'image' => null,
                'technologies' => ['Laravel', 'Tailwind', 'MySQL'],
                'github_link' => 'https://github.com/soufain',
                'live_demo' => 'https://najmiacademy.test'
            ],
            (object)[
                'title' => 'AI Email Assistant using n8n',
                'slug' => 'ai-email-assistant-n8n',
                'description' => 'An automated workflow that reads incoming client emails, uses OpenAI to draft a response, and sends it via Gmail API.',
                'image' => null,
                'technologies' => ['n8n', 'OpenAI', 'Gmail API', 'Google Sheets'],
                'github_link' => null,
                'live_demo' => '#'
            ]
        ];

        return view('projects.index', compact('projects'));
    }

    public function show($slug)
    {
        // $project = Project::where('slug', $slug)->firstOrFail();

        // Mock data
        $project = (object)[
            'title' => 'Personal Blog Laravel',
            'slug' => 'personal-blog-laravel',
            'description' => 'A complete personal blog and portfolio developed with Laravel 12.',
            'case_study' => '<p>This project was built to showcase my backend skills and UI design principles.</p><h2>Architecture</h2><p>Used MVC pattern, robust migrations, clean controllers...</p>',
            'image' => null,
            'technologies' => ['Laravel 12', 'Tailwind CSS', 'Alpine.js', 'MySQL'],
            'github_link' => 'https://github.com',
            'live_demo' => 'https://najmiacademy.test',
            'created_at' => now()->subMonths(1)
        ];

        return view('projects.show', compact('project'));
    }
}
