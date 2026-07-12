<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'image', 'technologies', 'github_link', 'live_demo', 'case_study', 'user_id'];

    protected $casts = [
        'technologies' => 'array',
    ];
}
