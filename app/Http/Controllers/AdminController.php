<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{

    // Mise en place du middleware qui permet l'accès à la page seulement pas un administrateur
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Liste des utilisateurs avec possibilité de définir user en tant qu'admin ou non
    // Et Liste des projets avec possibilité de les valider ou supprimer
    public function index()
    {
        return response()->view('admin.index', array_merge([
            'users' =>  User::all(),
            'projects'  =>  Project::all()
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Modifie la colonne 'validated' de la table projects pour valider le projet
    public function update(Request $request, $id)
    {

        $project = Project::findOrFail($id);
        $project->update($request->except('_token'));

        return redirect('admin')
            ->with('message', 'Modification enregistrée !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Suppression du projet
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete($project->all());

        return redirect('admin')
            ->with('message', 'Modification enregistrée !');
    }
}
