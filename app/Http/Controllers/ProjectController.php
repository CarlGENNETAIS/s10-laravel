<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectsRequest;
use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectController extends Controller
{
    public function index()
    {
        return response()->view('projects.index', array_merge([
            'projects' =>  Project::all()
        ]));
    }

    public function create()
    {
        return view('projects.create', compact('project'));
    }

    public function store(ProjectsRequest $request)
    {
        $project = Project::create($request->except('_token'));
        return redirect(route('projects.index'));

    }

    public function show($id)
    {

        return response()->view('projects.show', array_merge([
            'project' =>  Project::find($id),
            'id'    =>  $id
        ]));


    }

    public function edit($id)
    {
        return response()->view('projects.edit', array_merge([
            'project' =>  Project::find($id),
            'id'    =>  $id
        ]));
    }

    public function update(ProjectsRequest $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->update($request->all());

        return redirect(route('projects.index'));
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete($project->all());

        return redirect(route('projects.index'));
    }
}
