<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectsRequest;
use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->except('create', 'index');
    }

    // liste des projets validés
    public function index()
    {
        return response()->view('projects.index', array_merge([
            'projects' =>  Project::all()
        ]));
    }

    // Création d'un nouveau projet
    public function create()
    {
        return view('projects.create', compact('project'));
    }

    // Sauvegarde du nouveau projet dans la base de donnée
    public function store(ProjectsRequest $request)
    {
        $project = Project::create($request->except('_token'));
        return redirect(route('projects.index'))
            ->with('message', 'Projet envoyé et en attente de validation !');

    }

    // Affichage d'un seul projet en détail
    public function show($id)
    {

        return response()->view('projects.show', array_merge([
            'project' =>  Project::find($id),
            'id'    =>  $id
        ]));


    }

    // Édition de projet
    public function edit($id)
    {
        return response()->view('projects.edit', array_merge([
            'project' =>  Project::find($id),
            'id'    =>  $id
        ]));
    }

    // Mise à jour de projet dans la base de donnée après édition
    public function update(ProjectsRequest $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->update($request->except('_token'));

        return redirect(route('projects.show', $id))
            ->with('message', 'Modification enregistrée !');
    }

    // Suppression de projet dans la base de donnéee
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete($project->all());

        return redirect(route('projects.index'));
    }

}
