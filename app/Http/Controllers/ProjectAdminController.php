<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(2);
        return view('dashboard.projects.index', ['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'titel' => 'required',
            'description' => 'required',
        ]);

        // dd($valid);

        $item = new Project($valid);
        $item->save();

        return redirect( route('dashboard', $item->id ) );        
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', ['projects'=>$projects]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $valid_data = $request->validate(
            [
                'titel'       => 'required',
                'description' => 'required',
            ]
        );

        $project->update($valid_data);
        $project->save();
        
        return redirect( route('project.index', $project->id ) );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect(route('projects.index'))->with('alert', 'Het item '.$project->title.' is nu weg.');
    }
}
