@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {{--Retour arrière--}}
                <a href="{{ URL::previous() }}"><button class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i> Retour</button></a><br /><br />

                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Éditer le projet n°{!! $id !!}</h2></div>

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

                            {{--CheckBox Part--}}
                            {!! Form::label('Type du projet') !!}<br/>
                            {!! Form::checkbox('project_type', 1, null, ['class'   =>  'yield']) !!} Site Internet<br/>
                            {!! Form::checkbox('project_type', 2, null, ['class'   =>  'yield']) !!} 3D<br/>
                            {!! Form::checkbox('project_type', 3, null, ['class'   =>  'yield']) !!} Animation 2D<br/>
                            {!! Form::checkbox('project_type', 4, null, ['class'   =>  'yield']) !!} Installation multimédia<br/>
                            {!! Form::checkbox('project_type', 5, null, ['class'   =>  'yield']) !!} Jeu vidéo<br/>
                            {!! Form::checkbox('project_type', 6, null, ['class'   =>  'yield']) !!} DVD<br/>
                            {!! Form::checkbox('project_type', 7, null, ['class'   =>  'yield']) !!} Print<br/>
                            {!! Form::checkbox('project_type', 8, null, ['class'   =>  'yield']) !!} CD-Rom<br/>
                            {!! Form::checkbox('project_type', 9, null, ['class'   =>  'yield']) !!} Evènement<br/>
                            {!! Form::checkbox('project_type', 10, null, ['class'   =>  'yield']) !!}Autre<br/><br/>

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