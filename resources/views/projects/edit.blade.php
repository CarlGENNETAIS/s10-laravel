@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {{--Retour arrière--}}
                <a href="{{ URL::previous() }}"><button class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i> Retour</button></a><br /><br />

                <!-- Affichage des erreurs de validation -->
                @if($errors)
                    <br />
                    <ul style="list-style: none;">
                        @foreach($errors->all() as $error)
                            <li style="color:red;">--> {{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                <!-- Affichage du message de succès -->
                @if(Session::has('message'))
                    <div class="alert alert-info">
                        {{Session::get('message')}}
                    </div>
                @endif

                <!-- Formulaire d'édition de projet -->
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Éditer le projet n°{!! $id !!}</h3></div>

                    <div class="panel-body">
                        {!! Form::open(array('url'  =>  route('projects.update', $id), 'method'  =>  'put')) !!}
                        {!! Form::token() !!}
                            {!! Form::label('Nom du projet') !!}
                            {!! Form::text('name_project', $project->name_project, ['class'    =>  'form-control', 'placeholder' => $project->name_project]) !!}<br /><br />

                            {{--Partie client commanditaire du projet--}}
                            {!! Form::label("Nom du client commanditaire") !!}
                            {!! Form::text('name_client_command', $project->name_client_command, ['class'    =>  'form-control', 'placeholder' => $project->name_client_command]) !!}<br /><br />
                            {!! Form::label('Adresse du commanditaire') !!}
                            {!! Form::text('location_command', $project->location_command, ['class'   =>  'form-control', 'placeholder' => $project->location_command]) !!}<br /><br />
                            {!! Form::label('Email du commanditaire') !!}
                            {!! Form::text('email_command', $project->email_command, ['class'   =>  'form-control', 'placeholder' => $project->email_command]) !!}<br /><br />
                            {!! Form::label('Téléphone du commanditaire') !!}
                            {!! Form::text('phone_command', $project->phone_command, ['class'   =>  'form-control', 'placeholder' => $project->phone_command]) !!}<br /><br />

                            {{--Partie client suiveur de projet--}}
                            {!! Form::label("Nom du client suiveur") !!}
                            {!! Form::text('name_client_monitor', $project->name_client_monitor, ['class'    =>  'form-control', 'placeholder' => $project->name_client_monitor]) !!}<br /><br />
                            {!! Form::label('Adresse du suiveur') !!}
                            {!! Form::text('location_monitor', $project->location_monitor, ['class'   =>  'form-control', 'placeholder' => $project->location_monitor]) !!}<br /><br />
                            {!! Form::label('Email du suiveur') !!}
                            {!! Form::text('email_monitor', $project->email_monitor, ['class'   =>  'form-control', 'placeholder' => $project->email_monitor]) !!}<br /><br />
                            {!! Form::label('Téléphone du suiveur') !!}
                            {!! Form::text('phone_monitor', $project->phone_monitor, ['class'   =>  'form-control', 'placeholder' => $project->phone_monitor]) !!}<br /><br />

                            {{--Partie de description du projet--}}
                            {!! Form::label('Fiche Identité') !!}
                            {!! Form::textarea('identity_fiche', $project->identity_fiche, ['class'   =>  'form-control', 'placeholder' => $project->identity_fiche]) !!}<br /><br />

                            {{--Radio Part--}}
                            {!! Form::label('Type du projet') !!}<br/>
                            {!! Form::radio('project_type', 1, ($project->project_type == 1) ? true : null) !!} Site Internet<br/>
                            {!! Form::radio('project_type', 2, ($project->project_type == 2) ? true : null) !!} 3D<br/>
                            {!! Form::radio('project_type', 3, ($project->project_type == 3) ? true : null) !!} Animation 2D<br/>
                            {!! Form::radio('project_type', 4, ($project->project_type == 4) ? true : null) !!} Installation multimédia<br/>
                            {!! Form::radio('project_type', 5, ($project->project_type == 5) ? true : null) !!} Jeu vidéo<br/>
                            {!! Form::radio('project_type', 6, ($project->project_type == 6) ? true : null) !!} DVD<br/>
                            {!! Form::radio('project_type', 7, ($project->project_type == 7) ? true : null) !!} Print<br/>
                            {!! Form::radio('project_type', 8, ($project->project_type == 8) ? true : null) !!} CD-Rom<br/>
                            {!! Form::radio('project_type', 9, ($project->project_type == 9) ? true : null) !!} Evènement<br/>
                            {!! Form::radio('project_type', 10, ($project->project_type == 10) ? true : null) !!}Autre<br/><br/>

                            {{--Retour description du projet--}}
                            {!! Form::label('Contexte de la demande') !!}
                            {!! Form::textarea('context', $project->context, ['class'   =>  'form-control', 'placeholder' => $project->context]) !!}<br /><br />
                            {!! Form::label('Votre demande') !!}
                            {!! Form::textarea('application_project', $project->application_project, ['class'   =>  'form-control', 'placeholder' => $project->application_project]) !!}<br /><br />
                            {!! Form::label('Vos objectifs') !!}
                            {!! Form::textarea('objective_project', $project->objective_project, ['class'   =>  'form-control', 'placeholder' => $project->objective_project]) !!}<br /><br />
                            {!! Form::label('Contraintes particulières et informations complémentaires') !!}
                            {!! Form::textarea('constraint', $project->constraint, ['class'   =>  'form-control', 'placeholder' => $project->constraint]) !!}<br /><br />

                            {!! Form::submit('Modifier', ['class'    =>  'btn btn-primary btn-lg btn-block']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection