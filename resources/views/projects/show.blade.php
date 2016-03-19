@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="{{ url('/projects') }}"><button class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i> Retour</button></a>
            @if(Auth::check() && Auth::user()->isAdmin())
            <a href="{!! $project->id !!}/edit" style="display:inline-block;"><button class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Éditer le projet</button></a>
            {!! Form::open (array(
            'method'=>'delete',
            'route' =>['projects.destroy',$project->id],
            'style'  =>  'display:inline-block;'
            )) !!}
            {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Supprimer le projet', ['type' => 'submit', 'class' =>  'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endif
            <br /><br />

            <div class="panel panel-default">
                <div class="panel-heading"><h3>{!! $project->name_project !!}</h3></div>

                <div class="panel-body">
                    @if($project)
                    <h4>Commanditaire</h4>
                    <div class="col-md-4">
                        <strong> Nom</strong>
                    </div>  
                    <div class="col-md-6">
                        {!! $project->name_client_command !!}
                    </div>
                    <div class="col-md-4">
                        <strong> Adresse</strong>
                    </div>  
                    <div class="col-md-6">
                        {!! $project->location_command !!}
                    </div>
                    <div class="col-md-4">
                        <strong> Email</strong>
                    </div>  
                    <div class="col-md-6">
                        <a href="mailto:{!! $project->email_command !!}">{!! $project->email_command !!}</a>
                    </div>
                    <div class="col-md-4">
                        <strong> Téléphone</strong>
                    </div>  
                    <div class="col-md-6">
                        {!! $project->phone_command !!}
                    </div>
                    <div class="row">

                    </div>
                    <h4 >Suiveur</h4>
                    <div class="col-md-4">
                        <strong> Nom</strong>
                    </div>  
                    <div class="col-md-6">
                        {!! $project->name_client_monitor !!}
                    </div>
                    <div class="col-md-4">
                        <strong> Adresse</strong>
                    </div>  
                    <div class="col-md-6">
                        {!! $project->location_monitor !!}
                    </div>
                    <div class="col-md-4">
                        <strong> Email</strong>
                    </div>  
                    <div class="col-md-6">
                        <a href="mailto:{!! $project->email_monitor !!}">{!! $project->email_monitor !!}</a>
                    </div>
                    <div class="col-md-4">
                        <strong> Téléphone</strong>
                    </div>  
                    <div class="col-md-6">
                        {!! $project->phone_monitor !!}
                    </div>
                    <div class="row">
                    </div>
                    <h4>Description du projet</h4>
                    <div class="col-md-4">
                        <strong> Fiche identite</strong>
                    </div>  
                    <div class="col-md-6">
                        {!! $project->identity_fiche !!}
                    </div>
                    <div class="col-md-4">
                        <strong> Type de projet</strong>
                    </div>  
                    <div style="visibility:hidden">
                        {!! $type = $project->project_type !!}
                    </div>
                    <div class="col-md-6">
                        <?php switch ($type): 
                        case 0: echo "Non spécifié"; break;
                        case 1: echo "Site Internet"; break;
                        case 2: echo "3D"; break;
                        case 3: echo "Animation 2D"; break;
                        case 4: echo "Installation multimedia"; break;
                        case 5: echo "Jeu video"; break;
                        case 6: echo "DVD"; break;
                        case 7: echo "Print"; break;
                        case 8: echo "CD-Rom"; break;
                        case 9: echo "Evenement"; break;
                        case 10: echo "autre"; break;
                        default: echo "Non spécifié";
                        endswitch;
                        ?>
                    </div>
                    <div class="col-md-4">
                        <strong> Contexte de la demande</strong>
                    </div>  
                    <div class="col-md-6">
                        {!! $project->context !!}
                    </div>
                    <div class="col-md-4">
                        <strong> La demande</strong>
                    </div>  
                    <div class="col-md-6">
                        {!! $project->application_project !!}
                    </div>
                    <div class="col-md-4">
                        <strong> Les objectifs</strong>
                    </div>  
                    <div class="col-md-6">
                        {!! $project->objective_project !!}
                    </div>
                    <div class="col-md-4">
                        <strong> Contraintes et informations supplementaires</strong>
                    </div>  
                    <div class="col-md-6">
                        {!! $project->constraint !!}
                    </div>
                    @elseif(empty($project)) <!-- Affichage du message si aucun projet ne correspond à l'id de l'URL -->
                    <div class="alert alert-danger" role="alert">
                        <p>Le projet n'existe pas</p>
                    </div>
                    @endif
                </div>
            </div>



        </div>
    </div>
</div>
@endsection