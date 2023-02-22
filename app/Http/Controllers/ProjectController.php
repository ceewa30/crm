<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('id')->paginate(5);
        return view('projects.index')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all()->pluck('username', 'id');
        $clients = Client::all()->pluck('company_name', 'id');
        // $status = App\Models\Project::STATUS as $status;
        
        return view('projects.create', compact('users', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|min:100',
            'deadline' => 'required|date',
            'user_id' => 'required',
            'client_id' => 'required',
            'status' => 'required'
        ]);

        Project::create([
            'uuid' => Str::uuid(),
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'user_id' => $request->user_id,
            'client_id' => $request->client_id,
            'status' => $request->status
        ]);

        return to_route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $users = User::all()->pluck('username', 'id');
        $clients = Client::all()->pluck('company_name', 'id');

        return view('projects.edit',compact('project', 'users', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
        'title' => 'required|max:255',
        'description' => 'required|min:100',
        'deadline' => 'required|date',
        'user_id' => 'required',
        'client_id' => 'required',
        'status' => 'required'
        ]);

        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'user_id' => $request->user_id,
            'client_id' => $request->client_id,
            'status' => $request->status
        ]);

        return to_route('projects.show', $project)->with('success', 'Project Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return to_route('projects.index')->with('success', 'Client Move to Trash success');
    }
}
