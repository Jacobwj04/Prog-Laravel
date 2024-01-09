<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('project.index', ['projects' => $projects]);
    }

    public function add() {
        $project = new Project();
        $project->titel = 'mijn data';
        $project->save();
    }
}
