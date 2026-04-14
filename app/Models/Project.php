<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'tags', 'challenge', 'solution', 'result', 'github_link'];
}
