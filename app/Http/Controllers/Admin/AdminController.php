<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Video;
use App\Models\Message;
use App\Models\Project;

class AdminController extends Controller
{
    public function index()
    {
        $stats = [
            'articles_count' => Article::count(),
            'videos_count' => Video::count(),
            'messages_count' => Message::count(),
            'projects_count' => Project::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
