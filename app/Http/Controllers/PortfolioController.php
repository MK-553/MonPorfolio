<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $skills = Skill::all();

        return view('welcome', compact('projects', 'skills'));
    }
}
